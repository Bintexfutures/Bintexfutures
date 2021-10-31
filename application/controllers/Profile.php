<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $data_s=$this->session->userdata('username'); 
		if (!$this->session->userdata('userlogin')) {
			redirect('login', 'refresh');
		}
	}



	public function index()
	{
		$re=$this->session->userdata('userlogin');
		$this->load->view('includes/header_dashboard');
		if (isset($_POST['submit'])){
			extract($_POST);
			//print_r($_POST);
     $data = array();
		}
		
		if (isset($_POST['submitu'])){
			extract($_POST);
			//print_r($_POST);		
                    $data = array(
		           'address' =>$address,
		           'birth' =>$birth,
		           'pincode' =>$pincode,
		           'city' =>$city,
		           'password' =>$password);
     //print_r($data);
                    $this->db->update('users', $data, array('id'=>$re->id));
		}
		
		$this->load->view('profile');


		$this->load->view('includes/footer_dashboard');
	}
}
