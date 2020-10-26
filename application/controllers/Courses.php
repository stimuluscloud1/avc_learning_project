<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Courses extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common');
    $this->load->library("pagination");
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
        //*=============image upload=======================*//
        $new_image_name = "imgName" . time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['icon']['name']);
        $config = array();
        $config['upload_path'] = 'upload/course/thumbnail';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['file_name'] = $new_image_name;
        $config['overwrite'] = false;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('icon');
        $data = $this->upload->data()['file_name'];
        //*=============image upload=======================*//

        //*=============video upload=======================*//
        $new_image_name = "videoName" . time() . str_replace(str_split(' ()\\/,:*?"<>|'), '', $_FILES['video']['name']);
        $config = array();
        $config['upload_path'] = 'upload/course/video';
        $config['allowed_types'] = 'mp4';
        $config['file_name'] = $new_image_name;
        $config['overwrite'] = false;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('video');
        $dataV = $this->upload->data()['file_name'];
        //*=============video upload=======================*//

        $now = date('Y-m-d H:i:s');
        $adminID=$this->session->userdata('admin_id');   
        $dataI['courseTitle'] = $this->input->post('courseTitle');
        $dataI['courseCategory'] = $this->input->post('courseCategory');
        $dataI['courseThumbnail'] = $data;
        $dataI['courseIntroVideo'] = $dataV;
        $dataI['courseDescription'] = $this->input->post('courseDescription');
        $dataI['created_by'] = $adminID;
        $dataI['created_at'] = $now;
        $this->common->insertData($table, $dataI);
      
    }
    if($this->uri->segment(2)=='delete'){  
      $id =$this->uri->segment(3);
      $condition=array(
       'id' => $id 
      );

      $set=array(
        'status' => '0'
      );
      $this->common->dataUpdate($table,$condition,$set);
    }

    if($this->uri->segment(2)=='enable'){  
      $id =$this->uri->segment(3);
      $condition=array(
       'id' => $id 
      );

      $set=array(
        'active' => '1'
      );
      $this->common->dataUpdate($table,$condition,$set);
    }

    if($this->uri->segment(2)=='disable'){  
      $id =$this->uri->segment(3);
      $condition=array(
       'id' => $id 
      );

      $set=array(
        'active' => '2'
      );
      $this->common->dataUpdate($table,$condition,$set);
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
