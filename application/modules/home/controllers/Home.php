<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	
	public function index()
	{
		if(isset($this->session->userdata['session_data'])){
			$user_id = $this->session->userdata['session_data']['user_id'];

			$this->load->model('home_model');
			$user_data = $this->home_model->get_user_info($user_id);
			$data = array('user_data' => $user_data);
			$this->load->view('home-view', $data);
		}else{
			redirect(base_url().'auth');
		}
		
		
	}//end of index function

	function home_api(){
		$this->load->library('auth_token');
		
		$input = urldecode(file_get_contents('php://input'));
		$recevied = json_decode($input, true);
		
		//$this->load->model('home_model');
		//$user_data = $this->home_model->get_user_info($user_id);
		$jwt = $_SERVER['HTTP_JWT'];

		$decoded = $this->auth_token->decode($jwt);
		$user_id = $decoded->user_id;
		$this->load->model('home_model');
		$user_data = $this->home_model->get_user_info($user_id);
		$resp = $user_data;
		$this->output->set_status_header(200);
        $this->output->set_content_type('application/json', 'utf-8');
        $this->output->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        $this->output->_display();
        exit;
	}// end of home api function
	
	
}// end of class
