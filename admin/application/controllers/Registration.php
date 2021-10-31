<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html

	 */
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login')) {
			redirect('login' , 'refresh');
		}
	}
	
	public function index(){

	}
	public function view()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('registration/view');
		$this->load->view('include/footer');
	}
		public function kyc()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('registration/kyc');
		$this->load->view('include/footer');
	}
	
		public function kyc1()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('registration/kyc1');
		$this->load->view('include/footer');
	}
	
	public function delete1()
	{
	$this->db->delete('kyc', array('id' =>$this->uri->segment(3,0)));
		redirect('registration/kyc');
		}
		
public function active()
	{
	$this->db->update('kyc', array('status'=>'2'), array('id' =>$this->uri->segment(3,0)));
		redirect('registration/kyc');
		}
		
public function inactive()
	{
$this->db->update('kyc', array('status'=>'1'), array('id' =>$this->uri->segment(3,0)));
		redirect('registration/kyc');
		}
		
		
		
	

}
