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
        $this->load->view('courses');                            /** Admin Media Page */
  } 
  public function course_edit()
  {
    $this->load->view('course-edit');
  }

}
