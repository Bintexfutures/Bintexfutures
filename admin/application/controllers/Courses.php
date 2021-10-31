<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

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
	public function addcourses()
	{
		$nav=array('title'=>'','bc'=>array(
			'home'=>base_url('dashboard'),'Courses'=>base_url('courses/addcourses'),'details'=>''));

		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav',$nav);
		if(isset($_POST['submit'])){
			
			$this->load->model('Mcourses');
				$this->Mcourses->addcourses();

		}
		$this->load->view('courses/addcourses');
		$this->load->view('include/footer');

	}

	public function viewcourses()
	{
		$nav=array('title'=>'Courses','bc'=>array(
			'home'=>base_url(),'Courses'=>base_url('courses'),'Vew'=>''));
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav', $nav);
		$this->load->view('courses/viewcourses');
		$this->load->view('include/footer');
	}
	

	public function singlepage()
	{$nav=array('title'=>'single Page','bc'=>array(
			'home'=>base_url(),' About'=>base_url('Abouts'),'single about page'=>''));
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->model('Mcourses');
			$data['k']=$this->Mcourses->singleView();
		$this->load->view('include/nav', $nav);
		$this->load->view('courses/singlecourses', $data);
		$this->load->view('include/footer');
	}

public function updatecourses()
{
	$id=$this->uri->segment(3);
	if(isset($_POST['submit']))
			{
				$this->load->model('Mcourses');
				$this->Mcourses->updatecourses();
				
				//redirect('product/updateproduct','refresh');
			}
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			$this->load->model('Mcourses');
			$data['k']=$this->Mcourses->singleview();
			
			$this->load->view('courses/updatecourses',$data);
			$this->load->view('include/footer');
}
public function inactive(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('courses',array('status'=>'1'), array('id'=>$id));
		redirect('courses/viewcourses','refresh');




}
public function active(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('courses',array('status'=>'0'), array('id'=>$id));
		redirect('courses/viewcourses','refresh');




}
public function deletecourses()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('courses',array('id'=>$id));
		//echo $this->db->last_query();
		redirect('courses/viewcourses','refresh');

}
}
