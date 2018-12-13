<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/Home/js');
		$this->load->view('admin/Home/Main_header');
		$this->load->view('admin/Home/Content');
		$this->load->view('admin/Home/Sidebar');
		$this->load->view('admin/Home/Footer');

	}

}
?>