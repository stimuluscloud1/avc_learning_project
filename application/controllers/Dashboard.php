<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common');

    /* Admin Session */
    if ($this->session->userdata('admin_session') != true) {
      redirect("login");
    }
  }

  /** Admin Dashboard Page */
  public function index()
  {
    $this->load->view('index');
  }

  /** Admin Profile Page **/
  public function adminProfile()
  {
    $table='admin';
    $condition=array(
      'userEmail' => $this->session->userdata('admin_session')
    );
    $order1='';
    $order2='';
    $this->common->dataList($table,$condition,$order1,$order2);
    $this->load->view('profile');
  }

  /** Admin Profile Page Setting **/
  public function adminProfileSetting()
  {
    $this->load->view('profile-setting');
  }

  /** Admin Update Password **/
  public function adminUpdatePassword()
  {
    if ($this->input->post('submit')) {
      $table = 'admin';
      $data['userEmail'] = $this->session->userdata('admin_session');
      $data['userPassword'] = md5($this->input->post('currentPassword'));
      $result = $this->common->resultCount($table, $data);
      if ($result > 0) {
        $condition = array(
          'userEmail' => $this->session->userdata('admin_session')
        );

        $set = array(
          'userPassword' => md5($this->input->post('password'))
        );
        $this->common->dataUpdate($table, $condition, $set);
        $this->session->set_flashdata('password_update', 'Password Updated Successfully, Please Login Again');
      } else {
        $this->session->set_flashdata('password_update', 'Please Check Your Current Password');
      }
    }
    $this->load->view('update-password');
  }
}
