<?php

class Produk extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk');
		$this->load->model('M_login');
	}
	public function index()
	{
		$data['produk']=$this->M_produk->select('tbl_barang');
		$this -> load -> view('Produk/V_produk',$data);
	}
	public function detailproduk($id)
	{
		$where  = array('ID_BARANG' => $id, );
		$data['produk']=$this->M_produk->selectwhere('tbl_barang', $where)->row();
		$this -> load -> view('Produk/V_produkdetail', $data);
	} 
	public function addtocart($id)
	{
		$data_session=$this->session->userdata('id_pelanggan');
		$id_barang = $this->input->post('ID_BARANG');
        $alamat_pel = $this->input->post('alamat');
        $no_telp = $this->input->post('no');
        $jk = $this->input->post('kelamin');
        $tgl_lahir = $this->input->post('tanggal');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'nama_pel' => $nama_pel,
            'alamat_pel' => $alamat_pel,
            'no_telp' => $no_telp,
            'jk' => $jk,
            'tgl_lahir' => $tgl_lahir,
            'email' => $email,
            'password' => $password           
            );
        $this -> M_login -> register('tbl_pelanggan',$where);
        redirect(base_url("Login"));
	} 

}

?>