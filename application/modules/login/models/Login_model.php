<?php
class Login_model extends CI_model{
 
 
 
		
	
		function verify_user($email, $password){
        $this->db->select('*');
        $this->db->where('user_email', $email);
        $this->db->where('user_password', $password);
        $q = $this->db->get('user_reg');
         
        if($q->num_rows()>0){
            return $q->row_array();
        
        }else{
            return false;
        }
    }// end of function verify user
	

		
}
	