<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk');
		$this->load->model('M_login');
	}
	public function index()
	{
		$data['home']=$this->M_produk->select('tbl_barang');
		$this->load->view('Homepage/Main_content',$data);
	}
}
?>