<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slideshow extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Slideshow_model');
		$this -> model = $this -> Slideshow_model;
		$this -> load -> database();
		$this -> load -> helper('url');
	}

	public function index()
	{
		$data = array(
			'data_slideshow' => $this -> Slideshow_model -> get_slideshow(),
		);
		$this->load->view('admin/Slideshow/Slideshow', $data);
		
	}

	public function insert(){
		$this -> load -> view('admin/Slideshow/Tambah_slideshow');
	}
	public function create(){
		if(isset($_POST['btnSubmit'])){
        	$config = array('upload_path' => './assets/webadmin/img/',
        					'allowed_types' => 'gif|jpg|png'
        					);
        	$this -> load -> library ('upload',$config);
        	if ($this->upload->do_upload('img'))
    		{
        		$upload_data = $this -> upload -> data ();
        		$adminn = $this-> input -> post ('adminn');
        		$foto = "assets/webadmin/img/".$upload_data['file_name'];
				$data = array(
				'ID_SLIDE' => $this->session->userdata('ID_BARANG'),
				'ID_ADMIN' => $adminn,
				'IMG' => $foto,
				);
				$insert_data = $this->db->insert('tbl_slideshow',$data);
			if ($insert_data) {
				redirect(base_url().'index.php/admin/Slideshow');
			 } else{
				echo "string";
			 }
		}
		else
		{
			echo "string1";
		}
	}
}

public function edit($id){
		$row = $this -> Slideshow_model -> get_by_id($id);
		$this -> load -> library('encrypt');
		if($row){
			$data = array(
				'ID_SLIDE' => $row -> ID_SLIDE,
				'ID_ADMIN' => $row -> ID_ADMIN,
				'IMG' => $row -> IMG,
			);
			$this -> load -> view('admin/Slideshow/Edit_slide',$data);
		}
		else{
			redirect(base_url().'admin/Slideshow');
		}
	}
	public function editaction(){
		$config = array('upload_path' => './assets/webadmin/img/',
        					'allowed_types' => 'gif|jpg|png'
        					);
        $this -> load -> library ('upload',$config);
        $adminn = $this-> input -> post ('adminn');
        if($_FILES['img']['tmp_name']!=NULL){
        	if($this -> upload -> do_upload('img')){
        		$upload_data = $this -> upload -> data();
        		$row = $this -> Slideshow_model -> get_by_id($this -> input -> post('id'));
        		unlink($row -> img);
        		$data = array(
        			'ID_ADMIN' => $adminn,
        			'IMG' => "assets/webadmin/img/".$upload_data['file_name'],
        		);
        		$res = $this -> Slideshow_model -> update ($this -> input -> post('id'),$data);
        		if ($res >= 0) {
        			header('location:'.base_url().'index.php/admin/Slideshow');
        		}
        	}
        }else{
        	$data = array(
        			'ID_ADMIN' => $adminn
        		);
        		$res = $this -> Slideshow_model -> update ($this -> input -> post('id'),$data);
        		if ($res >= 0 ) {
        			header('location:'.base_url('index.php/admin/Slideshow'));
        		}
        }
	}
	public function hapus($id){
		$res = $this -> Slideshow_model -> delete($id);
		if($res){
		header('location:'.base_url('index.php/admin/Slideshow'));
		}
		else{
			header('location:'.base_url('index.php/admin/Slideshow'));
		}
	}
}
?>