<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg_model extends CI_Model {

	
	public function form_data($user)
	{
		$this->db->insert('users' ,$user);
	}
}
