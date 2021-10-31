<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

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
		$this->load->model('Subscribe_model');
	}
	
	public function index(){	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('subscribe');
		$this->load->view('include/footer');
	}
	
	public function delete(){
	    $id=$_GET['id'];
	    $data = $this->Subscribe_model->subscribe($id);
	    if($data==1){
	        $this->session->set_flashdata('response', 'successfully deleted');
	        redirect(base_url()."subscribe");
	       // $this->index();
	        
	    }else{
	       redirect(base_url()."admin/subscribe");

	    }
	 
	}
}
