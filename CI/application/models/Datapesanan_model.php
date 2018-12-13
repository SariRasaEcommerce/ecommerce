<?php
	class Datapesanan_model extends CI_Model{ 
		public $id ='ID_TRANSAKSI';
		public $table ='tbl_detailtransaksi';
		function get_datatransaksi(){
			return $this->db->query('SELECT tbl_detailtransaksi.ID_DETAILTRANSAKSI, tbl_pelanggan.NAMA_PEL, tbl_pelanggan.NO_TELP, tbl_detailtransaksi.TGL_TRANSAKSI, tbl_pelanggan.ALAMAT_PEL FROM tbl_detailtransaksi, tbl_pelanggan WHERE tbl_detailtransaksi.ID_PELANGGAN=tbl_pelanggan.ID_PELANGGAN ORDER BY ID_DETAILTRANSAKSI DESC')->result();
		}
	}
?>