<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Courses extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common');
    date_default_timezone_set('asia/kolkata');

    if ($this->session->userdata('admin_session') != true) {      /* Admin Session */
      redirect("login");
    }
  }

  public function index()
  {   
    
    //Insert New Course
    $table='course';
    if($this->input->post('submit'))
    {

        $now = date('Y-m-d H:i:s');
        $adminID=$this->session->userdata('admin_id');   
        $dataI['courseTitle'] = $this->input->post('courseTitle');
        $dataI['courseCategory'] = $this->input->post('courseCategory');
        $dataI['courseThumbnail'] = '123.png';
        $dataI['courseIntroVideo'] = '123.png';
        $dataI['courseDescription'] = $this->input->post('courseDescription');
        $dataI['created_by'] = $adminID;
        $dataI['created_at'] = $now;
        $this->common->insertData($table, $dataI);

    } 

    //Get Course category
    $table1='category';
    $condition=array(
      'status' => '1'
    );
    $order1='id';
    $order2='DESC';
    $data['categoryList']= $this->common->dataListF($table1,$condition,$order1,$order2)->result();

    $table2='course';
    $data['courseList']= $this->common->dataListF($table2,$condition,$order1,$order2)->result();
    $this->load->view('courses', $data);
  } 

}
