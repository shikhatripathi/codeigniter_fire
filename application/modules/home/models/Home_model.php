<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
	function get_user_info($user_id){
		$this->db->where('user_id', $user_id);
		$q = $this->db->get('user_info');

		if($q->num_rows()>0){
			return $q->row_array();
		}else{
			return false;
		}
	}// end of function
}