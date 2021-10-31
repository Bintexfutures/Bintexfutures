<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Exchange extends CI_Controller {
	public function index()
	{
		$this->load->view('includes/header');
		
	
	
	
		$this->load->view('exchange');
		$this->load->view('includes/footer');
	}
}
