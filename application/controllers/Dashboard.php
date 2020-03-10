<?php defined('BASEPATH') OR exit('no direct script access');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/layouts/head');
		$this->load->view('admin/layouts/navbar');
		$this->load->view('admin/layouts/sidebar');
		$this->load->view('admin/layouts/main');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/layouts/footer');
	
	}
	
}
