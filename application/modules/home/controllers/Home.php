<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	
	public function index()
	{
		if(isset($this->session->userdata['session_data'])){
			$this->load->view('home-view');
		}else{
			redirect(base_url().'auth');
		}
		
		
	}

	
	
}
