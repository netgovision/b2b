<?php defined('BASEPATH') OR exit('no direct script access');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/layouts/head');
		$this->load->view('home');
		$this->load->view('admin/layouts/footer');
	
	}
	
}
