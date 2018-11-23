<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MX_Controller {

	
	public function index()
	{
	
		$this->load->view('about-view');
	}
}
