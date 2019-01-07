<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends MX_Controller {

	public function _construct()
	{
		parent::_construct();
		$this->load->helper('url' ,'form');
	
	}
	
	   public function index()
	  {
		$this->load->view('registration-view');

	  }
	  public function register_user()
	  {
			$this->load->model('registration_model');
			$this->load->helper('string');
			//echo random_string('alnum','16');
		$user=array(
			'user_id'=>random_string('alnum','16'),
			'user_name' =>$this->input->post('user_name'),
			'user_mobile' =>$this->input->post('user_mobile'),
			'user_address' =>$this->input->post('user_address'),
			'user_email' =>$this->input->post('user_email'),
			'user_password' =>$this->input->post('user_password'),
			'user_type'       => 2
		);
		$email_check=$this->registration_model->email_check($user['user_email']);
		if($email_check){
			$this->registration_model->register_user($user);
			redirect('login');
		}
		else{
			redirect('registration');
			echo"You are already registered";
		}
	}
	
}