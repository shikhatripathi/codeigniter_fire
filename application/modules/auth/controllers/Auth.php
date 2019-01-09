<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	public function index(){
		$this->load->view('authentication-view');
	}

	function submit(){
		
		$this->load->library('auth_token');
		$this->load->library('session');
		
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
            $resp = true;
        }else{

           	$resp = false;
        }

		
		

		
                
        $this->output->set_status_header(200);
        $this->output->set_content_type('application/json', 'utf-8');
        $this->output->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        $this->output->_display();
        exit;
	}// end of submit


	function submit_api(){
		$this->load->library('auth_token');
		
		$input = urldecode(file_get_contents('php://input'));
		$recevied = json_decode($input, true);
		
		//var_dump($recevied); exit;
		$this->load->model("auth_model");
        $user=$this->auth_model->verify_user($recevied['username'],$recevied['password']);

       // echo "string";
       //var_dump($user);
       //exit;
        if($user){
          
        


            
            $resp =  $this->auth_token->get_token($user['user_name'],  $user['user_type'] );
        }else{

           	$resp = "Wrong Username or Password";
        }
		
		

		
                
        $this->output->set_status_header(200);
        $this->output->set_content_type('application/json', 'utf-8');
        $this->output->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        $this->output->_display();
        exit;
	}


	function logout(){
			$this->session->sess_destroy();
			redirect(base_url().'auth');
	}// end of logout

}// end of clas


