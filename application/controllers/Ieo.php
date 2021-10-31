<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ieo extends CI_Controller {
	public function index()
	{
		$this->load->view('includes/header');
		
	
	
	
		$this->load->view('ieo');
		$this->load->view('includes/footer');
	}
}
