<?php
	class Databarang_model extends CI_Model{ 
		public $id ='ID_BARANG';
		public $table ='tbl_barang';
		function get_databarang(){
			return $this->db->query('SELECT * FROM tbl_barang ORDER BY ID_BARANG DESC')->result();
		}
		function get_by_id($id){
			$this -> db -> where($this -> id, $id);
			return $this -> db -> get($this -> table)->row();
		}
		function update($id,$data){
			$this->db->where($this->id, $id);
			$this->db->update($this->table, $data);
		}
		function delete($id){
			$this->db->where($this->id, $id);
			$this->db->delete($this->table);
		}
	}
?>