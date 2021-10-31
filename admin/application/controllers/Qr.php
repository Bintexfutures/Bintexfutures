<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qr extends CI_Controller {

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
	public function addgallery()
	{
		$nav=array('title'=>'','bc'=>array(
			'home'=>base_url('dashboard'),'gallery'=>base_url('qr/addgallery'),'details'=>''));

		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav',$nav);
		if(isset($_POST['submit'])){
			
			$this->load->model('Mqr');
				$this->Mqr->addgallery();

		}
		$this->load->view('qr/addgallery');
		$this->load->view('include/footer');

	}

	public function viewgallery()
	{
		$nav=array('title'=>'gallery','bc'=>array(
			'home'=>base_url(),'gallery'=>base_url('clients'),'Vew'=>''));
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav', $nav);
		$this->load->view('qr/viewgallery');
		$this->load->view('include/footer');
	}
	

	public function singlepage()
	{$nav=array('title'=>'single Page','bc'=>array(
			'home'=>base_url(),' About'=>base_url('Abouts'),'single about page'=>''));
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->model('Mqr');
			$data['k']=$this->Mqr->singleView();
		$this->load->view('include/nav', $nav);
		$this->load->view('qr/singlegallery', $data);
		$this->load->view('include/footer');
	}

public function updategallery()
{
	$id=$this->uri->segment(3);
	if(isset($_POST['submit']))
			{
				$this->load->model('Mqr');
				$this->Mqr->updategallery();
				
				//redirect('product/updateproduct','refresh');
			}
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			$this->load->model('Mqr');
			$data['k']=$this->Mqr->singleview();
			
			$this->load->view('qr/updategallery',$data);
			$this->load->view('include/footer');
}




public function deletegallery()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('qr',array('id'=>$id));
		//echo $this->db->last_query();
		redirect('qr/addgallery','refresh');

}
}
