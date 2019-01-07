

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends  MX_Controller  {

	
	public function index()
	{
		
		$this->load->view('login-view');
	}

	function login_user(){
        $this->load->library('session');
        $email = $this->input->post('user_email');
        $password = $this->input->post('user_password');
        $this->load->model("login_model");
        $user=$this->login_model->verify_user($email,$password);

       // echo "string";
       //var_dump($email);
       //exit;
        if($user){
          
            $session_data = array(
                'user_id'       =>  $user['user_id'],
                'user_name'     =>  $user['user_name'],
                'user_email'    =>  $user['user_email'],
                'user_type'     =>  $user['user_type']
            );


            $this->session->set_userdata('session_data', $session_data);
        
            redirect('auth');
        }
        else{
        
            //$this->load->view('login');
            echo "Something went wrong";
            }
        }     

     public function logout(){
    $this->session->unset_userdata('session_data',$session_data);
    $this->session->sess_destroy();
    redirect('login');
}

}    
	

