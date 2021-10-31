<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $data_s=$this->session->userdata('userlogin'); 
 		if (!$this->session->userdata('userlogin')) {
 			redirect('login', 'refresh');
 		}
	}


	public function index()
	{
		$this->load->view('includes/header_dashboard');
		$this->load->view('dashboard');
		$this->load->view('includes/footer_dashboard');
	}

		public function changepassword()
	{
	   
		
		$this->load->view('includes/header_dashboard');
		if(isset($_POST['submit']))
			{
				$this->load->model('Modellogin');
				$this->Modellogin->passwordchange();
			}
		$this->load->view('changepassword');
		$this->load->view('includes/footer_dashboard');
	}
}
