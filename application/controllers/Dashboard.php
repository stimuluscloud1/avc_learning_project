<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('common');
		
        // if ($this->session->userdata() != true or $this->session->userdata('Role') != 'admin') {
        //     redirect("welcome");
        //}
    } 

	public function index()
	{
		$this->load->view('index');
	}
}
