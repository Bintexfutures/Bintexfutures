<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waitlist extends CI_Controller {

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
		$this->load->model('Waitlist_model');
	}
	
	public function index(){	
	    
	    $data['wait'] = $this->Waitlist_model->get();
	    
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav',$data);
		$this->load->view('waitlist');
		$this->load->view('include/footer');
	}
	
	public function update(){
	    $value=$this->input->post('wait');
	    $id=$this->input->post('id');
	    $value_id=array('wait_value'=>$value);
	    $data = $this->Waitlist_model->update($id,$value_id);
	   
	    if($data==1){
	        $this->session->set_flashdata('response', 'successfully updated');
	        redirect(base_url()."waitlist");
	       // $this->index();
	        
	    }else{
	       redirect(base_url()."admin/waitlist");

	    }
	 
	}
}
