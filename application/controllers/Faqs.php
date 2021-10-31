<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Faqs extends CI_Controller {
	public function index()
	{
		$this->load->view('includes/header');
		
	
	
	
		$this->load->view('faqs');
		$this->load->view('includes/footer');
	}
}
