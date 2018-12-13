<?php
class Dataadmin_model extends CI_Model{
	public $id ='ID_ADMIN';
	public $table ='tbl_admin';
	function get_dataadmin(){
		return $this->db->query('SELECT * FROM tbl_admin ORDER BY ID_ADMIN DESC')->result();
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