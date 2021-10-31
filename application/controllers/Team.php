<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Team extends CI_Controller {
	public function index()
	{
	    $this->load->model('Team_model');
	    $data['team']=$this->Team_model->get();
		$this->load->view('includes/header');
		$this->load->view('team',$data);
		$this->load->view('includes/footer');
	}
}
