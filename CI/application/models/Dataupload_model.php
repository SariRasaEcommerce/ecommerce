<?php
/**
 * 
 */
class Dataupload_model extends CI_Model
{
	public $id ='ID_DETAILTRANSAKSI';
	public $table ='tbl_detailtransaksi';
		function get_dataupload(){
			return $this->db->query('SELECT tbl_detailtransaksi.ID_DETAILTRANSAKSI, tbl_detailtransaksi.TOTAL, tbl_detailtransaksi.GAMBAR_TF, tbl_detailtransaksi.STATUS_TRANSFER, tbl_pelanggan.NAMA_PEL FROM tbl_detailtransaksi, tbl_pelanggan WHERE tbl_detailtransaksi.ID_PELANGGAN = tbl_pelanggan.ID_PELANGGAN')->result();
		}
		function updatetf(){
			$this->db->where($this->id, $id);
			$this->db->update($this->table, $data);
		}
		public function update($table,$data,$where){
    	$this->db->update($table,$data,$where);
  }
}
?>