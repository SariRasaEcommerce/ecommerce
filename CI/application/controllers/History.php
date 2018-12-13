<?php

class History extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_history');
		$this->load->model('M_login');
		$this -> load ->library('session');
		$this->load->helper(array('form','url'));
	}
	public function index()
	{
		$where=$this->session->userdata('id_pelanggan');
		$data['transaksi']=$this-> M_history -> get_history();
		$this -> load -> view('History/V_history', $data);
	}
	
}
	?>