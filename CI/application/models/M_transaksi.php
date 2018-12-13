 <?php 

class M_transaksi extends CI_Model{ 
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
	public function upload($table,$data){
		$this->db->insert($table,$data);
	}
	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	
	function transaksi()
	{
		return $this->db->query('SELECT * FROM tbl_keranjang, tbl_barang, tbl_pelanggan WHERE tbl_keranjang.ID_BARANG=tbl_barang.ID_BARANG AND tbl_keranjang.ID_PELANGGAN=tbl_pelanggan.ID_PELANGGAN');
	}
	

	
	
} 

?>