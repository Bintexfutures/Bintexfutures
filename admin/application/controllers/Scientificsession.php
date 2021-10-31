<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scientificsession extends CI_Controller {

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
	public function add()
	{
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		if(isset($_POST['submit'])){
			
			$this->load->model('Model_scientificsession');
				$this->Model_scientificsession->add();
		}
		$this->load->view('scientificsession/add');
		$this->load->view('include/footer');

	}

	public function recycleadd()
	{
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('scientificsession/recycleadd');
		$this->load->view('include/footer');

	}


	




	public function singlepage()
	{
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->model('Model_scientificsession');
			$data['k']=$this->Model_scientificsession->singleView();
		$this->load->view('include/nav');
		$this->load->view('scientificsession/singlegallery', $data);
		$this->load->view('include/footer');
	}

public function update()
{
	$id=$this->uri->segment(3);
	if(isset($_POST['submit']))
			{
				$this->load->model('Model_scientificsession');
				$this->Model_scientificsession->update();				
			}
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			$this->load->model('Model_scientificsession');
			$data['k']=$this->Model_scientificsession->singleview();
			
			$this->load->view('scientificsession/update',$data);
			$this->load->view('include/footer');
}





public function active(){
	$id=$this->uri->segment(3);
		$del=$this->db->delete('scientificprograms',array('id'=>$id));
		redirect('scientificsession/add','refresh');
}

public function inactive(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('scientificprograms',array('status'=>'1'), array('id'=>$id));
		redirect('scientificsession/add','refresh');
}


public function deletegallery()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('ocm',array('id'=>$id));
		//echo $this->db->last_query();
		redirect('gallery/viewgallery','refresh');

}
}
