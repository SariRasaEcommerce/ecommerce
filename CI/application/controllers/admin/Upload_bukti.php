<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_bukti extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Dataupload_model');
		$this -> model = $this -> Dataupload_model;
		$this -> load -> database();
		$this -> load -> helper('url');
	}
	public function index(){
		$data = array(
			'data_upload' => $this -> Dataupload_model -> get_dataupload(),
		);
		$this->load->view('admin/Uploadbukti/upload_bukti', $data);
		
	}
	public function bukti(){
        $id =  $this -> input -> post('id_bukti');
        $status = $this -> input -> post('status');
		$data = array(
					'ID_BUKTI'=> $id,
        			'STATUS' => $status,
        		);
        		$res = $this -> Dataupload_model -> updatetf ($this -> input -> post('id'),$data);
        		if ($res >= 0 ) {
        			header('location:'.base_url('index.php/admin/Uploadbukti/upload_bukti'));
        		}
	}
	public function bukti2(){
        $id =  $this -> input -> post('id_bukti');
        $status = $this -> input -> post('status');
        $where['ID_BUKTI'] = $id; 
		$data = array(
        			'STATUS' => $status,
        		);
        		$res = $this ->db->update ('tbl_buktitf',$data,$where);
        		if ($res >= 0 ) {
        			header('location:'.base_url('index.php/admin/Upload_bukti'));
        		}
	}

}
?>