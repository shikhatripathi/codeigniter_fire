<?php 


class Registration_model extends CI_Model
{
	
	function   register_user($user)
	{
		$this->db->insert('user_reg' ,$user);

	}
	function email_check($email_check){
	$this->db->select('*');
	$this->db->where('user_email' ,$email_check);
	$query=$this->db->get('user_reg');
	if($query->num_rows()>0){
		return false;
		echo "You are already registered";

	}else{
		return true;
	}}
}?>