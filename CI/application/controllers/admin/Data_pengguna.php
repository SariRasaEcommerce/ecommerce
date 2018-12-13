<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Datapengguna_model');
		$this -> model = $this -> Datapengguna_model;
		$this -> load -> database();
		$this -> load -> helper('url');
	}
	public function index()
	{
		$data = array(
			'data_pengguna' => $this -> Datapengguna_model -> get_datapengguna(),
		);
		$this->load->view('admin/Datamaster/Data_pengguna', $data);
		
	}

	public function confirm($id){
		$row = $this -> Datapengguna_model -> get_by_id($id);
		$status = "Terkonfirmasi";
		$data = array(
					'STATUS_PEL' => $status
				);
		$res = $this -> Datapengguna_model -> update ($id,$data);
        		if ($res >= 0) {
        			header('location:'.base_url().'index.php/admin/Data_pengguna');
        		}
	}

	public function delete($id){
		$res = $this -> Datapengguna_model -> delete($id);
		if($res){
		header('location:'.base_url('index.php/Data_pengguna'));
		}
		else{
			header('location:'.base_url('index.php/Data_pengguna'));
		}
	}
}
?>