<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
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
		if($this->input->post('submit')== true){
			$table='admin';
			$data['userEmail']=$this->input->post('userEmail');	
			$data['userPassword']=md5($this->input->post('userPassword'));
			
			$result=$this->common->resultCount($table, $data);
			
			if($result > 0){
				$resultValue['message']="Login Successfully.";
				$this->session->set_flashdata('login_success', 'Login Successfully');
				$this->session->set_userdata(array(
					'admin_session' => $data['userEmail']
				));
				$this->load->view('login', $resultValue);				
						
			}else{
				$resultValue['message']="Either Email or Password is Invalid, Please Check Again.";
				$this->session->set_flashdata('login_success', 'Error message.');
				$this->load->view('login', $resultValue);
			}

		}

		$this->load->view('login');
	}
}
