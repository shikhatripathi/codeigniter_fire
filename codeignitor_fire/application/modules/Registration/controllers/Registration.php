<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends MX_Controller {

	
	public function index()
	{
		$this->load->view('registration-view');
	}
	public function register(){
	$user=array(
    'First Name'=>$this->input->post('fname'),
    'Last Name'=>$this->input->post('lname'),
    'DOB'=>$this->input->post('udob'),
    'College Name'=>$this->input->post('ucollege'),
    'trade'=>$this->input->post('utrade'),
    'phone'=>$this->input->post('uphone'),
    'email'=>$this->input->post('email'),
    'address'=>$this->input->post('address')


		);
	$this->load->model('reg_model');
	$this->reg_model->form_data($user);
}
}
