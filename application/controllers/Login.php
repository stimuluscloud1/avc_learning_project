<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('common');
	
    } 

	public function index()
	{	
		if($this->input->post('submit')== true){
			$table='admin';
			$data['userEmail']=$this->input->post('userEmail');	
			$data['userPassword']=md5($this->input->post('userPassword'));
			
			$result=$this->common->resultCount($table, $data);
		
			if($result > 0){

				$condition=array(
					'userEmail'=>$data['userEmail']
				  );
				  $order1='';
				  $order2='';
				  $dataR= $this->common->dataList($table,$condition,$order1,$order2);
				  $adminID=$dataR->id;


				$this->session->set_flashdata('login_success', 'Login Successfully');
				$this->session->set_userdata(array(
					'admin_session' => $data['userEmail'],
					'admin_id' => $adminID
				));
				$this->load->view('login');				
						
			}else{
				$this->session->set_flashdata('login_success', 'Either Email or Password is Invalid, Please Check Again');
				$this->load->view('login');
			}

		}

		$this->load->view('login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect($this->index);
	}
}
