 <?php

class Checkout extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi');
		$this->load->model('M_checkout');
		$this -> load ->library('session');
	}
public function index()
	{
		$where=$this->session->userdata('id_pelanggan');
		// die($where);
		$data['checkout']=$this-> M_checkout -> get_item();
		$this -> load -> view('Checkout/V_checkout',$data);
	}

	public function detail()
	{
		$where=$this->session->userdata('id_pelanggan');
		$data['pemesan']=$this-> M_transaksi -> selectwhere('tbl_pelanggan', $where);
		$data['transaksi']=$this-> M_transaksi -> transaksi();
		$this -> load -> view('Checkout/V_detail', $data);
	}
	public function total()
	{
	
	}
}

?>