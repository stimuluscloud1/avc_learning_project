<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
Public Function index : View, Insert and Delete Category 
Public Function check_duplicate_category : Check the duplicate entry in deatebase 
*/

class Lession extends CI_Controller
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
    $this->load->view('lession');
  }
}
