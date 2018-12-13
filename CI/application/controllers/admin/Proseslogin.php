<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proseslogin extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('Model_login');
 
    }
 
    function index(){
        $this->load->view('admin/login');
    }
 
    function aksi_login(){
        $username = $this->input->post('Email');
        $password = $this->input->post('Password');
        $where = array(
            'Email' => $username,
            'Password' => $password
            );
        $cek = $this->Model_login->cek_login("tbl_admin",$where)->num_rows();
        $cek2 = $this->Model_login->cek_login("tbl_admin",$where)->row();
        if($cek > 0){
 
            $data_session = array(
                'ID_ADMIN'   => $cek2-> ID_ADMIN,
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("index.php/admin/Home"));
 
        }else{
            echo "<script>alert('Username dan Password Salah !');</script>";
            redirect(base_url("admin/Proseslogin"));
        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/proseslogin'));
    }
}
