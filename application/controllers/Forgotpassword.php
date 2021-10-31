<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Forgotpassword extends CI_Controller {
	public function index()
	{
	    if (isset($_POST['submit'])) {

			$this->load->model('Modellogin');
			$this->Modellogin->forgotpassword();
		}
		$this->load->view('includes/header_login');
		$this->load->view('forgotpassword');
	}
	public function referral()
	{
		$this->load->view('includes/header_login');
		$this->load->view('register2');
	}
}
