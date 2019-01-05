<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	
	public function index()
	{
		
		$this->load->view('home-view');
	}

	function submit(){
		$this->load->library('auth_token');
		$headers = $this->auth_token->request_headers();
		$input = $this->input->post('f');
		print_r($headers);
	}// end of submit
	
}
