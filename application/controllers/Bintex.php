<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bintex extends CI_Controller {
	public function index()
	{
		$this->load->view('includes/header');
		
	
	
	
		$this->load->view('bintex');
		$this->load->view('includes/footer');
	}
}
