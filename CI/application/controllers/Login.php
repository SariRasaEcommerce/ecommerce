<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->model('M_login');
    }

	public function index()
	{
		$this -> load -> view('Login/Main_content');
	}

 	function aksi_login(){
        $email = $this->input->post('Email');
        $password = $this->input->post('Password');
        $where = array(
            'Email' => $email,
            'Password' => $password
            );
        $cek = $this->M_login->cek_login("tbl_pelanggan",$where)->num_rows();
        $cek2 = $this->M_login->cek_login("tbl_pelanggan",$where)->row();
        if($cek > 0){
 
            $data_session = array(
                'id_pelanggan'   => $cek2 -> ID_PELANGGAN,
                'email' => $email,
                'status' => "login"
                );
            
            $data_session=$this->session->userdata('id_pelanggan'); 
            redirect(base_url("index.php/Home"));
 
        }else{
            
            redirect(base_url("Login"));
        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }

    function aksi_register(){
        $nama_pel = $this->input->post('nama');
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