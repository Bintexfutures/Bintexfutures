<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Committee extends CI_Controller {

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
	public function addmember()
	{
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		if(isset($_POST['submit'])){
			
			$this->load->model('Model_committee');
				$this->Model_committee->add();

		}
		$this->load->view('committee/addcommittee');
		$this->load->view('include/footer');

	}

	public function ocm()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('committee/ocm');
		$this->load->view('include/footer');
	}

	public function reclyeocm()
	{
		
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('committee/reclyeocm');		
		$this->load->view('include/footer');
	}

	public function reclyespeaker()
	{
		
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('committee/reclyespeaker');		
		$this->load->view('include/footer');
	}

	

	public function speaker()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('committee/speaker');
		$this->load->view('include/footer');
	}
	
	

	public function enable_disable()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('committee/enable_disable');
		$this->load->view('include/footer');
	}
	

	public function singlepage()
	{
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->model('Model_committee');
			$data['k']=$this->Model_committee->singleView();
		$this->load->view('include/nav');
		$this->load->view('gallery/singlegallery', $data);
		$this->load->view('include/footer');
	}

public function update()
{
	$id=$this->uri->segment(3);
	if(isset($_POST['submit']))
			{
				$this->load->model('Model_committee');
				$this->Model_committee->update();				
			}
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			$this->load->model('Model_committee');
			$data['k']=$this->Model_committee->singleview();
			
			$this->load->view('committee/update',$data);
			$this->load->view('include/footer');
}




public function inactive(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('ocm',array('status'=>'1'), array('id'=>$id));
		redirect('committee/ocm','refresh');
}
public function active(){
	$id=$this->uri->segment(3);
		$del=$this->db->delete('ocm',array('id'=>$id));
		redirect('committee/ocm','refresh');
}

public function inactive1(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('ocm',array('status'=>'1'), array('id'=>$id));
		redirect('committee/speaker','refresh');
}
public function active1(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('ocm',array('status'=>'0'), array('id'=>$id));
		redirect('committee/speaker','refresh');
}


public function inactive3(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('enable_disable',array('status'=>'0'), array('id'=>$id));
		redirect('committee/enable_disable','refresh');
}
public function active3(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('enable_disable',array('status'=>'1'), array('id'=>$id));
		redirect('committee/enable_disable','refresh');
}


public function deletegallery()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('ocm',array('id'=>$id));
		//echo $this->db->last_query();
		redirect('committee/ocm','refresh');

}
}
