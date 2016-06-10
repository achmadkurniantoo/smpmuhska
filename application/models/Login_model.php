<?php

/**
* 
*/
class Login_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		 $this->load->database();
	}

	public function login($username, $password){
		   $this->db->select('username, password');
		   $this->db->from('admins');
		   $this->db->where('username', $username);
		   $this->db->where('password', MD5($password));
		   $this->db->limit(1);
		 
		   $query = $this->db->get();
		 
		   if($query->num_rows() == 1)
		   {
		     return $query->result();
		   }
		   else
		   {
		     return false;
		   }
	}
}


?>