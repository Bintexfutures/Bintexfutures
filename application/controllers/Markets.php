<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Markets extends CI_Controller {
    function __construct(){
		parent::__construct();
	 $this->load->model('Markets_model');
	}
	public function index()
	{
	    $data['data']=$this->Markets_model->markets_data();
	    $data['markets_cap']=$this->Markets_model->marketcap_api();
	    $data['crypto']=$this->Markets_model->cry_api();
	    
		$this->load->view('includes/header');
		$this->load->view('markets',$data);
		$this->load->view('includes/footer');
	}
}
