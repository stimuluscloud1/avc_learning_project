<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
Public Function index : View, Insert and Delete Category 
Public Function check_duplicate_category : Check the duplicate entry in deatebase 
*/

class Category extends CI_Controller
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
    $table = 'category';

    if ($this->input->post('submit')) {             //insert category table 
      
       
      $this->form_validation->set_rules('category', 'Category', 'required|callback_check_duplicate_category');
      $this->form_validation->set_rules('description', 'Description', 'required');

      if ($this->form_validation->run() == TRUE) {
        $now = date('Y-m-d H:i:s');
        
        $dataI['category'] = $this->input->post('category');
        $dataI['description'] = $this->input->post('description');
        $dataI['created_by'] = $this->session->userdata('admin_id');
        $dataI['created_at'] = $now;
        $resultI = $this->common->insertData($table, $dataI);
      }
    }
    if($this->uri->segment(2)=='delete'){         //update category
      $id =$this->uri->segment(3);
      $condition=array(
       'id' => $id 
      );

      $set=array(
        'status' => '0'
      );
      $this->common->dataUpdate($table,$condition,$set);
    }

    $condition = array(                   //get category list
      'status' => '1'
    );
    $order1 = 'id';
    $order2 = 'DESC';
    $resultF['resultC'] = $this->common->dataListF($table, $condition, $order1, $order2)->result();
    $this->load->view('category', $resultF);
  }

  public function check_duplicate_category($category)
  {
    $table = 'category';
    $data['category'] = $category;
    $result = $this->common->resultCount($table, $data);
    if ($result > 0) {
      $this->form_validation->set_message('check_duplicate_category', 'The {field} name is already available.');
      return false;
    } else {
      return true;
    }
  }
}
