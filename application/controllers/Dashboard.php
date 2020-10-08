<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
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
		$this->load->view('profile');
    }

}
