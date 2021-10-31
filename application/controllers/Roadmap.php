<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Roadmap extends CI_Controller {
	public function index()
	{
		$this->load->view('includes/header');
		
	
	
	
		$this->load->view('roadmap');
		$this->load->view('includes/footer');
	}
}
