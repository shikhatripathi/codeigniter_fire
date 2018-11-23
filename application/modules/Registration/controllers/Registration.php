<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends MX_Controller {

	
	public function index()
	{
		$this->load->view('registration-view');
	}
	public function register(){
	$user=array(
	    'first_name'=>$this->input->post('fname'),
	    'last_name'=>$this->input->post('lname'),
	    'dob'=>$this->input->post('udob'),
	    'college_name'=>$this->input->post('ucollege'),
	    'trade'=>$this->input->post('utrade'),
	    'phone'=>$this->input->post('uphone'),
	    'email'=>$this->input->post('email'),
	    'address'=>$this->input->post('address')

	);
	$this->load->model('reg_model');
	$this->reg_model->form_data($user);
}
}
