<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if(isset($_POST['submit'])){
			$this->load->model('modellogin');
			$this->modellogin->checklogin();
		}
		$this->load->view('login');
		
		}

		public function changepassword()
	{
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		if(isset($_POST['submit']))
			{
				$this->load->model('Modellogin');
				$this->Modellogin->passwordchange();
			}


		$this->load->view('include/changepassword');
		$this->load->view('include/footer');
	}
	}