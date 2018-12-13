<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pmsan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Datapesanan_model');
		$this -> model = $this -> Datapesanan_model;
		$this -> load -> database();
		$this -> load -> helper('url');
	}

	public function index()
	{
		$data = array(
			'data_transaksi' => $this -> Datapesanan_model -> get_datatransaksi(),
		);
		$this->load->view('admin/Pesan/Data_pemesan', $data);
		
	}

}
?>
