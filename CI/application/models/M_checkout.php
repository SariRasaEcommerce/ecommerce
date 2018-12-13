<?php 

class M_checkout extends CI_Model{ 
	public function get_item()
	{
		return $this->db->query('SELECT * FROM tbl_keranjang, tbl_barang, tbl_pelanggan WHERE tbl_keranjang.ID_BARANG=tbl_barang.ID_BARANG AND tbl_keranjang.ID_PELANGGAN=tbl_pelanggan.ID_PELANGGAN');
		$this->db->select('tbl_keranjang.*,tbl_barang.*,tbl_pelanggan.*');
		$this->db->join('tbl_barang','tbl_keranjang.ID_BARANG=tbl_barang.ID_BARANG');
		$this->db->join('tbl_pelanggan','tbl_barang.ID_PELANGGAN=tbl_pelanggan.ID_PELANGGAN');
		$this->db->from('tbl_keranjang');
		$this->db->where('tbl_keranjang.ID_PELANGGAN',$id);
		$data=$this->db->get();
		return $data;
	}
	
	
	
} 

?>