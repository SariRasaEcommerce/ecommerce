<?php
class Datapengguna_model extends CI_Model{
	public $id ='ID_PELANGGAN';
	public $attr ='STATUS_PEL';
	public $table ='tbl_pelanggan';
		function get_datapengguna(){
			return $this->db->query('SELECT * FROM tbl_pelanggan ORDER BY ID_PELANGGAN DESC')->result();
		}
		function get_by_id($id){
			$this->db->where($this->id, $id);
			return $this->db->get($this->table)->row();
		}
		function update($id,$data){
			$this->db->where($this->id, $id);
			$this->db->update($this->table,$data);
		}
		function delete($id){
			$this->db->where($this->id,$id);
			$this->db->delete($this->table,$data);
		}
}
?>