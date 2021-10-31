<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Referral extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $data_s=$this->session->userdata('username'); 
		if (!$this->session->userdata('userlogin')) {
			redirect('login', 'refresh');
		}
	}


	public function index()
	{
		$this->load->view('includes/header_dashboard');
		$this->load->view('referral');
		$this->load->view('includes/footer_dashboard');
	}
}
