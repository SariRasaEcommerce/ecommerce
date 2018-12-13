<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Dataadmin_model');
		$this -> model = $this -> Dataadmin_model;
		$this -> load -> database();
		$this -> load -> helper('url');
	}
	public function index()
	{
		$data = array(
			'data_admin' => $this -> Dataadmin_model -> get_dataadmin(),
		);
		$this->load->view('admin/Datamaster/Data_admin', $data);
	}
	public function insert(){
		$this -> load -> view('admin/Datamaster/Tambah_dataadmin');
	}
	public function create(){
        	$config = array(
			'upload_path' => './gambar/admin/',
    		'allowed_types' => 'gif|jpg|png'
    	);
    	$this->load->library('upload', $config);
    	if ($this->upload->do_upload('img')){
    		$upload_data = $this -> upload -> data ();
    		$admin = $this -> input -> post ('admin');
    		$email = $this-> input -> post ('email');
    		$alamat = $this-> input -> post ('alamat');
    		$pass = $this-> input -> post ('pass');
    		$telp = $this-> input -> post ('telp');
    		$foto = "./gambar/admin/".$upload_data['file_name'];
			$data = array(
				'ID_ADMIN' => $this->session->userdata('ID_ADMIN'),
				'NAMA_ADMIN' => $admin,
				'EMAIL' => $email,
				'ALAMAT' => $alamat,
				'PASSWORD' => $pass,
				'NO_TELP' => $telp,
				'IMG' => $foto,
			);
			$insert_data = $this->db->insert('tbl_admin',$data);
			if($insert_data >=0) {
				redirect(base_url().'index.php/admin/Data_admin');
			}else{
				echo "string";
			}
		}
	}
public function edit($id){
		$row = $this -> Dataadmin_model -> get_by_id($id);
		$this -> load -> library('encrypt');
		if($row){
			$data = array(
				'ID_ADMIN' => $row -> ID_ADMIN,
				'NAMA_ADMIN' => $row -> NAMA_ADMIN,
				'EMAIL' => $row -> EMAIL,
				'ALAMAT' => $row -> ALAMAT,
				'PASSWORD' => $row -> PASSWORD,
				'NO_TELP' => $row -> NO_TELP,
				'IMG' => $row -> IMG,
			);
			$this -> load -> view('admin/Datamaster/Edit_admin',$data);
		}
		else{
			redirect(base_url().'admin/Data_admin');
		}
	}
	public function editaction(){
		$config = array('upload_path' => './gambar/admin/',
        					'allowed_types' => 'gif|jpg|png'
        					);
        $this -> load -> library ('upload',$config);
        $adminn = $this -> input -> post('admin');
        $email = $this -> input -> post('email');
        $alamat = $this -> input -> post('alamat');
        $pass = $this -> input -> post('pass');
        $telp = $this -> input -> post('telp');
        if($_FILES['img']['tmp_name']!=NULL){
        	if($this -> upload -> do_upload('img')){
        		$upload_data = $this -> upload -> data();
        		$row = $this -> Dataadmin_model -> get_by_id($this -> input -> post('id'));
        		unlink($row -> img);
        		$data = array(
        			'NAMA_ADMIN' => $adminn,
        			'EMAIL' => $email,
        			'ALAMAT' => $alamat,
        			'PASSWORD' => $pass,
        			'NO_TELP' => $telp,
        			'IMG' => "./gambar/admin/".$upload_data['file_name'],
        		);
        		$res = $this -> Dataadmin_model -> update ($this -> input -> post('id'),$data);
        		if ($res >= 0) {
        			header('location:'.base_url().'index.php/admin/Data_admin');
        		}
        	}
        }else{
        	$data = array(
        			'NAMA_ADMIN' => $adminn,
        			'EMAIL' => $email,
        			'ALAMAT' => $alamat,
        			'PASSWORD' => $pass,
        			'NO_TELP' => $telp,
        		);
        		$res = $this -> Dataadmin_model -> update ($this -> input -> post('id'),$data);
        		if ($res >= 0 ) {
        			header('location:'.base_url('index.php/admin/Data_admin'));
        		}
        }
	}
	public function hapus($id){
		$res = $this -> Dataadmin_model -> delete($id);
		if($res){
		header('location:'.base_url('index.php/admin/Data_admin'));
		}
		else{
			header('location:'.base_url('index.php/admin/Data_admin'));
		}
	}
}
?>