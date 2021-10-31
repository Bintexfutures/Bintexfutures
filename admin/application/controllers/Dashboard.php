<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login')) {
			redirect('login' , 'refresh');
		}
	}
	

	public function index()	{ $nav=array('title'=>'Dashboard');
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav', $nav);
		$this->load->view('dashboard/dashboard');
		$this->load->view('include/footer');
	}
	
		public function mywallet()	{ 
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('mywallet');
		$this->load->view('include/footer');
	}
	
	public function logout(){
		$this->session->unset_userdata('login');
		redirect('login','refresh');
	}
	
}