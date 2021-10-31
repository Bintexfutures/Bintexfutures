<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Getsupport extends CI_Controller {
	public function index()
	{
		$this->load->view('includes/header');
		
	
	
	
		$this->load->view('getsupport');
		$this->load->view('includes/footer');
	}
}
