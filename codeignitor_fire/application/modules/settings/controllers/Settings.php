<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MX_Controller {

	
	public function index()
	{

		$this->load->view('settings-view');
	}
}
