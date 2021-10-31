<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supportjournals extends CI_Controller {

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
			
			$this->load->model('Model_supportjournals');
				$this->Model_supportjournals->add();

		}
		$this->load->view('supportjournals/add');
		$this->load->view('include/footer');

	}

	

public function update()
{
	$id=$this->uri->segment(3);
	if(isset($_POST['submit']))
			{
				$this->load->model('Model_supportjournals');
				$this->Model_supportjournals->update();				
			}
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			$this->load->model('Model_supportjournals');
			$data['k']=$this->Model_supportjournals->singleview();
			
			$this->load->view('supportjournals/update2',$data);
			$this->load->view('include/footer');
}




public function inactive(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('conferences',array('status'=>'0'), array('id'=>$id));
		redirect('conferences/add','refresh');
}
public function active(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('conferences',array('status'=>'1'), array('id'=>$id));
		redirect('conferences/add','refresh');
}

public function inactive1(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('conferences',array('status'=>'1'), array('id'=>$id));
		redirect('conferences/add','refresh');
}
public function active1(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('conferences',array('status'=>'0'), array('id'=>$id));
		redirect('conferences/add','refresh');
}


public function inactive3(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('enable_disable',array('status'=>'0'), array('id'=>$id));
		redirect('conferences/add','refresh');
}
public function active3(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('enable_disable',array('status'=>'1'), array('id'=>$id));
		redirect('conferences/add','refresh');
}

public function delete()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('supportjournals',array('id'=>$id));
		redirect('supportjournals/add','refresh');

}

public function deletegallery()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('ocm',array('id'=>$id));
		//echo $this->db->last_query();
		redirect('committee/ocm','refresh');

}
}
