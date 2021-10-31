<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kyc extends CI_Controller {

function __construct()
{
parent::__construct();
if (!$this->session->userdata('userlogin')) {
redirect('login' , 'refresh');
}
}


	public function index()
	{$re=$this->session->userdata('userlogin');
		$this->load->view('includes/header_dashboard');
		if (isset($_POST['submit'])){
			extract($_POST);
			//print_r($_POST);
		//	exit();
     $data = array(
		           'customer_id'=>$re->id,
		           'fname' =>$firstname,
		           'mname' =>$middlename,
		           'lname' =>$lastname,
		           'address' =>$address,
		           'pincode' =>$postalcode,
		           'location' =>$location ,
		           'country' =>$country,
		           'dob' =>$dateofbirth);
     //print_r($data);
                    $this->db->insert('kyc',$data);
                    redirect ('kyc/kycmain');
		}
		
		if (isset($_POST['update'])){
			extract($_POST);
			//print_r($_POST);
		
                    $data = array(
		           // 'customer_id'=>$re->id,
		           //'customer_id'=>$re->id,
		           'fname' =>$firstname,
		           'mname' =>$middlename,
		           'lname' =>$lastname,
		           'address' =>$address,
		           'pincode' =>$postalcode,
		           'location' =>$location ,
		           'country' =>$country,
		           'dob' =>$dateofbirth);
     //print_r($data);
                    $this->db->update('kyc', $data, array('customer_id'=>$re->id));
                    redirect ('kyc/kycmain');
		}
		
		$this->load->view('kyc');
		$this->load->view('includes/footer_dashboard');
	}
	
	public function kycmain()
	{$re=$this->session->userdata('userlogin');
		$this->load->view('includes/header_dashboard');
		$this->load->view('kycmain');
		$this->load->view('includes/footer_dashboard');
	}
	
	public function doc()
	{$re=$this->session->userdata('userlogin');
		$this->load->view('includes/header_dashboard');
		$this->load->view('kyc2');
		$this->load->view('includes/footer_dashboard');
	}
	
public function doc1()
	{$re=$this->session->userdata('userlogin');
	
		if(isset($_POST['submit'])){

			$this->load->model('mdocument');
			$this->mdocument->passport1();
		}
		$this->load->view('includes/header_dashboard');
					$k=$this->db->get_where('kyc',array('customer_id'=>$re->id))->row(); 
          if(@$k->status!='2'){ 
		$this->load->view('doc1');
          }
          if(@$k->status=='2'){
            $this->verify();
          }
		$this->load->view('includes/footer_dashboard');
}

public function doc2()
	{$re=$this->session->userdata('userlogin');
	
		if(isset($_POST['submit'])){

			$this->load->model('mdocument');
			$this->mdocument->idcard1();
		}
		$this->load->view('includes/header_dashboard');
					$k=$this->db->get_where('kyc',array('customer_id'=>$re->id))->row(); 
          if(@$k->status!='2'){ 
		$this->load->view('doc2');
          }
          if(@$k->status=='2'){
            $this->verify();
          }
		$this->load->view('includes/footer_dashboard');
}

public function doc3()
	{$re=$this->session->userdata('userlogin');
	
		if(isset($_POST['submit'])){

			$this->load->model('mdocument');
			$this->mdocument->driverfile1();
		}
		$this->load->view('includes/header_dashboard');
					$k=$this->db->get_where('kyc',array('customer_id'=>$re->id))->row(); 
          if(@$k->status!='2'){ 
		$this->load->view('doc3');
          }
		if(@$k->status=='2'){
            $this->verify();
          }
		$this->load->view('includes/footer_dashboard');
}
	
	
	public function passed()
	{$re=$this->session->userdata('userlogin');
		$this->load->view('includes/header_dashboard');
					$k=$this->db->get_where('kyc',array('customer_id'=>$re->id))->row(); 
          if(@$k->status!='2'){ 
		$this->load->view('kyc3');
          }
          	if(@$k->status=='2'){
            $this->verify();
          }
		$this->load->view('includes/footer_dashboard');
	}
   
   

	public function uploadfile1(){

		if(isset($_POST['submit1'])){

			$this->load->model('mdocument');
			$this->mdocument->passport1();
		}
		$this->load->view('includes/header_dashboard');
		$re=$this->session->userdata('userlogin');
			$k=$this->db->get_where('kyc',array('customer_id'=>$re->id))->row(); 
          if(@$k->status!='2'){
		$this->load->view('upload_file1');
          }
		if(@$k->status=='2'){
            $this->verify();
          }
		$this->load->view('includes/footer_dashboard');

	}


public function uploadfile2(){
			if(isset($_POST['submit2'])){

			$this->load->model('mdocument');
			$this->mdocument->passport2();
		}
		$this->load->view('includes/header_dashboard');
		$re=$this->session->userdata('userlogin');
			$k=$this->db->get_where('kyc',array('customer_id'=>$re->id))->row(); 
          if(@$k->status!='2'){
		$this->load->view('upload_file2');
          }
		if(@$k->status=='2'){
            $this->verify();
          }
		$this->load->view('includes/footer_dashboard');

	}

		public function driverfile1(){

		if(isset($_POST['drive1'])){

			$this->load->model('mdocument');
			$this->mdocument->driverfile1();
		
		}
		$this->load->view('includes/header_dashboard');
			$re=$this->session->userdata('userlogin');
			$k=$this->db->get_where('kyc',array('customer_id'=>$re->id))->row(); 
          if(@$k->status!='2'){
		$this->load->view('driverfile');
          }
		if(@$k->status=='2'){
            $this->verify();
          }
		$this->load->view('includes/footer_dashboard');

	}
			public function driverfile2(){

	
		
		if(isset($_POST['drive2'])){

			$this->load->model('mdocument');
			$this->mdocument->driverfile2();
		
		}
		$this->load->view('includes/header_dashboard');
			$re=$this->session->userdata('userlogin');
			$k=$this->db->get_where('kyc',array('customer_id'=>$re->id))->row(); 
          if(@$k->status!='2'){
		$this->load->view('driverfile2');
          }
		if(@$k->status=='2'){
            $this->verify();
          }
		$this->load->view('includes/footer_dashboard');

	}

	public function idcard(){

		if(isset($_POST['submit1'])){

			$this->load->model('mdocument');
			$this->mdocument->idcard1();
		
		}
		$this->load->view('includes/header_dashboard');
		$this->load->view('idcard');
		$this->load->view('includes/footer_dashboard');

	}
	
	public function idcard2(){
		if(isset($_POST['submit2'])){

			$this->load->model('mdocument');
			$this->mdocument->idcard2();
		
		}
		$this->load->view('includes/header_dashboard');
		$this->load->view('idcard2');
		$this->load->view('includes/footer_dashboard');

	}
	
	public function verify(){
        echo ' <div class="content-wrapper">
    <div class="container-fluid">	<div class="alert alert-success">
   <strong>Success!</strong> You are kyc successfully completed.
 </div></div></div>'; 
   }
}
