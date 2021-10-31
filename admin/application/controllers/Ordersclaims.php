<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordersclaims extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login')) {
			redirect('login' , 'refresh');
		}
	}
	
	
	public function index(){
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('ordersclaims/view');
		$this->load->view('include/footer');
	}
	
		public function referral(){
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('ordersclaims/referral');
		$this->load->view('include/footer');
	}
	



public function successfulorders(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('token_value', array('status'=>'2'), array('id'=>$id));
		redirect('ordersclaims','refresh');
}
public function expiredorders(){
	$id=$this->uri->segment(3);
		$del=$this->db->update('token_value', array('status'=>'3'), array('id'=>$id));
		redirect('ordersclaims','refresh');
}
public function claimedtokens(){
	$id=$this->uri->segment(3);
		$del=$this->db->update('token_value', array('status'=>'4'), array('id'=>$id));
		redirect('ordersclaims','refresh');
}
public function delete(){
	$id=$this->uri->segment(3);
		$del=$this->db->delete('token_value', array('id'=>$id));
		redirect('ordersclaims','refresh');
}


}
