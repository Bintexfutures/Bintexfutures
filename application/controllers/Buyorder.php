<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buyorder extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $data_s=$this->session->userdata('username'); 
		if (!$this->session->userdata('userlogin')) {
			redirect('login', 'refresh');
		}
	}



	public function view()
	{ 	
	    
		$this->load->view('includes/header_dashboard');
			if(isset($_POST['submit'])){
			
			$this->load->model('Mgallery');
				$this->Mgallery->addgallery();

		}
		
		$this->load->view('buy_order');	
	}
	public function Ordersclaims()
	{
		$this->load->view('includes/header_dashboard');
		$this->load->view('orders_claims');	
		$this->load->view('includes/footer_dashboard');
	}

	
}
