<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	public function index(){
		$this->load->view('authentication-view');
	}

	function submit(){
		$this->load->library('auth_token');
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user_type = 4;
		$msg = $this->auth_token->get_token($username, $user_type );

		var_dump($msg);
	}// end of submit



}// end of clas


