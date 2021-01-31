<<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model {

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	function data_login($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('t_admin')->row();
	}

	

}

