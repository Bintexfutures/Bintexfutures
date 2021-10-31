<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
	public function index()	{
		$this->load->view('includes/header_login');
		$this->load->view('register');
	}
	public function referral()	{
		$this->load->view('includes/header_login');
		$this->load->view('register2');
	}
		public function success()	{
		$this->load->view('includes/header');
		$this->load->view('success');
		$this->load->view('includes/footer');
	}
	
	public function active(){
	    
	    $link=$this->uri->segment(5);
		//echo $link;
	
	$res=$this->db->update('users',array('status'=>'1'),array('id'=>$link));
	if($res){
	    $this->load->view('active');
	}
		
	}
	
	public function resetpassword(){
	     if (isset($_POST['submit'])) {

			$this->load->model('Modellogin');
			$this->Modellogin->resetpassword();
		}
	    
	    	$this->load->view('includes/header_login');
		$this->load->view('resetpassword');
	
	}
}
