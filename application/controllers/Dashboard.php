<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common');

    if ($this->session->userdata('admin_session') != true) {      /* Admin Session */
      redirect("login");
    }
  }

  public function index()
  /** Admin Dashboard Page */
  {
    $this->load->view('index');
  }

  public function adminProfile()
  /** Admin Profile Page **/
  {
    $table = 'admin';
    $condition = array(
      'userEmail' => $this->session->userdata('admin_session')
    );
    $order1 = '';
    $order2 = '';
    $this->common->dataList($table, $condition, $order1, $order2);
    $this->load->view('profile');
  }

  public function adminProfileSetting()
  /** Admin Profile Page Setting **/
  {
    if($this->input->post('submit'))
    {
      $table = 'admin';

        $condition=array(
          'userEmail'=>$this->session->userdata('admin_session')
        );
        $order1='';
        $order2='';
        $dataR= $this->common->dataList($table,$condition,$order1,$order2);
        $adminID=$dataR->id;
        
        $table1='admininfo';
        $data['image']='123.png';
        $data['userFname']=$this->input->post('userFname');
        $data['userLname']=$this->input->post('userLname');
        $data['gender']=$this->input->post('gender');
        $data['dob']=$this->input->post('dob');
        $data['mobileNo']=$this->input->post('mobileNo');
        $data['addressL1']=$this->input->post('addressL1');
        $data['addressL2']=$this->input->post('addressL2');
        $data['city']=$this->input->post('city');
        $data['state']=$this->input->post('state');
        $data['country']=$this->input->post('country');
        $data['admin_id']=$adminID;
        $result = $this->common->insertData($table1, $data);
        
    }
    $this->load->view('profile-setting');
  }

  public function adminUpdatePassword()
  /** Admin Update Password **/
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

  public function adminUpdateEmail()
  {
    $this->load->view('update-email');
  }
}
