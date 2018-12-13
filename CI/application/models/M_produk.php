<?php 

class M_produk extends CI_Model{ 
	public function select($table){
		return $this->db->get($table);
	}
	public function selectlimit($table){
		$this->db->order_by('id_informasi','DESC') ;
		$this->db->limit(3) ;
		return $this->db->get($table) ;
	}
	public function selectwhere($table,$where){
		return $this->db->get_where($table, $where);
	}
	public function chart($table,$data){
		$this->db->insert($table,$data);
	}
	
} 

?>