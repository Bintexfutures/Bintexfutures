<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Markets extends CI_Controller {

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
			
		}
	}
	
	public function index(){	
	    $this->load->model('Market_model');
	      $data['data']=$this->Market_model->markets_get();
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('Markets/market',$data);
		$this->load->view('include/footer');
	}
	
	public function Add(){
 $this->load->model('Market_model');
	 extract($this->input->post());
	 $data=array('Name'=>$name,'Market_Cap'=>$Market_Cap,'Price'=>$Price,'Volume'=>$Volume,'Circulating'=>$Circulating,'Change'=>$Change,'Graph'=>$Price_Graph);
	  if($data!=""){
	      
	  $result=$this->Market_model->add($data);
	  
	  $this->session->set_flashdata('success', 'Successfully Added');
	    redirect('Markets');
	  }
	  
	}
	public function actions(){
	     $this->load->model('Market_model');
	    $edit=$this->input->post('edit');
	    $id=$this->input->post('id');
	    extract($this->input->post());
	     $data_1=array('Name'=>$name,'Market_Cap'=>$Market_Cap,'Price'=>$Price,'Volume'=>$Volume,'Circulating'=>$Circulating,'Change'=>$Change,'Graph'=>$Price_Graph);
          $data=array('id'=>$id);
          $result=$this->Market_model->action($data,$data_1,$edit);
          $this->session->set_flashdata("success",$result);
          redirect('Markets');
	    
	    
	}
	public function delete(){
	    	     $this->load->model('Market_model');
	    	$id=$this->uri->segment(3);
	    	  $data=array('id'=>$id);
         
          $result=$this->Market_model->delete($data);
          $this->session->set_flashdata("success",$result);
          redirect('Markets');
	}
}
