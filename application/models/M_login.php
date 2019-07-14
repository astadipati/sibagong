<?php
class M_login extends CI_Model{
	function login_admin($username,$password){
		$query=$this->db->query("SELECT * FROM admin_pa WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}
}
