<?php 

class M_login extends CI_Model{ 
	public function cek_login($table,$where){      
		return $this->db->get_where($table,$where);
	}

	public function register($table,$data){
		$this->db->insert($table,$data);
	}
	public function select_where($table,$data){
		return $this->db->get_where($table,$data);
	}
} 
?>