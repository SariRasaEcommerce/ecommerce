<?php

class Transaksi extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi');
		$this->load->model('M_login');
		$this -> model = $this -> M_transaksi;
		$this -> load -> database();
		$this -> load ->library('session');
		$this->load->helper(array('form','url'));
	}
	public function index()
	{
		$where=$this->session->userdata('id_pelanggan');
		$this -> load -> view('Transaksi/V_transaksi');
	}
	
	public function aksi_upload()
	{
		$config = array(
			'upload_path' => './gambar/buktitf/',
    		'allowed_types' => 'gif|jpg|png'
    	);
    	$this->load->library('upload', $config);
    	if ($this->upload->do_upload('img')){
    		$upload_data = $this -> upload -> data ();
    		$user = $this->session->userdata('id_pelanggan');
    		$foto = "./gambar/buktitf/".$upload_data['file_name'];
			$data = array(
				'ID_BUKTI' => $this->session->userdata('ID_BUKTI'),
				'ID_PELANGGAN' => $user,
				'ID_DETAILTRANSAKSI' => 'dfdfsf',
				'STATUS' => 'Belum Terkonfirmasi',
				'IMG' => $foto
			);
			$insert_data = $this->db->insert('tbl_buktitf',$data);
			if($insert_data >=0) {
				redirect(base_url().'Transaksi');
			}else{
				echo "string";
			}
		}
	}
}

	?>