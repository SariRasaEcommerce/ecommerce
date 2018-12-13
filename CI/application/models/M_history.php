<?php 

class M_history extends CI_Model{ 
public function get_history(){
		return $this->db->query('SELECT * FROM tbl_detailtransaksi, tbl_keranjang, tbl_barang, tbl_pelanggan WHERE tbl_detailtransaksi.ID_KERANJANG=tbl_keranjang.ID_KERANJANG AND tbl_detailtransaksi.ID_PELANGGAN=tbl_pelanggan.ID_PELANGGAN');
		$this->db->select('tbl_detailtransaksi.*,tbl_keranjang.*,tbl_pelanggan.*');
		$this->db->join('tbl_keranjang','tbl_detailtransaksi.ID_KERANJANG=tbl_keranjang.ID_KERANJANG');
		$this->db->join('tbl_pelanggan','tbl_keranjang.ID_PELANGGAN=tbl_pelanggan.ID_PELANGGAN');
		$this->db->from('tbl_detailtransaksi');
		$this->db->where('tbl_detailtransaksi.ID_PELANGGAN',$id);
		$data=$this->db->get();
		return $data;
	}
}
?>