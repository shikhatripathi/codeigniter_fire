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
		
		$this->load->model("auth_model");
        $user=$this->auth_model->verify_user($data['username'],$data['password']);

       // echo "string";
       //var_dump($user);
       //exit;
        if($user){
          
            $session_data = array(
                'user_id'       =>  $user['user_id'],
                'user_name'     =>  $user['user_name'],
                'user_email'    =>  $user['user_email'],
                'user_type'     =>  $user['user_type']
            );


            $this->session->set_userdata('session_data', $session_data);
            redirect('home');
        }else{

            redirect('auth');
        }

		
		

		$msg = "Hello ". $data['username'];
                
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


