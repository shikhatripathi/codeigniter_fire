<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	public function index(){
		$this->load->view('authentication-view');
	}

	function submit(){
		
		$this->load->library('auth_token');
		
		$input = urldecode(file_get_contents('php://input'));
		$recevied = json_decode($input, true);
		$data = array();

		foreach ($recevied as $key => $value) {
			$data[$value['name']] = $value['value'];

		}
		//var_dump($data); exit;
		$user_type = 4;
		

		
                
        $this->output->set_status_header(200);
        $this->output->set_content_type('application/json', 'utf-8');
        $this->output->set_output(json_encode($msg, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        $this->output->_display();
        exit;
	}// end of submit


	function submit_api(){
		$this->load->library('auth_token');
		
		$input = urldecode(file_get_contents('php://input'));
		$recevied = json_decode($input, true);
		
		//var_dump($recevied); exit;
		$user_type = 4;
		$msg = $this->auth_token->get_token($recevied['username'], $user_type );

		
                
        $this->output->set_status_header(200);
        $this->output->set_content_type('application/json', 'utf-8');
        $this->output->set_output(json_encode($msg, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        $this->output->_display();
        exit;
	}




}// end of clas


