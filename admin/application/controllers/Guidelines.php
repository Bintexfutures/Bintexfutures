<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guidelines extends CI_Controller {

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
			
			$this->load->model('Model_guidelines');
				$this->Model_guidelines->aboutadd();

		}
		$this->load->view('guidelines/add');
		$this->load->view('include/footer');

	}

	public function view()
	{
				
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav', $nav);
		$this->load->view('guidelines/view');
		$this->load->view('include/footer');
	}
	

	public function singlepage()
	{
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->model('Model_guidelines');
			$data['k']=$this->Model_guidelines->singleView();
		$this->load->view('include/nav', $nav);
		$this->load->view('guidelines/singleview', $data);
		$this->load->view('include/footer');
	}

public function updateabout()
{
	$id=$this->uri->segment(3);
	if(isset($_POST['submit']))
			{
				$this->load->model('Model_guidelines');
				$this->Model_guidelines->updateabout();
				
				//redirect('product/updateproduct','refresh');
			}
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			$this->load->model('Model_guidelines');
			$data['k']=$this->Model_guidelines->singleview();
			
			$this->load->view('guidelines/updatepage',$data);
			$this->load->view('include/footer');
}
public function inactive(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('aboutpage',array('status'=>'1'), array('id'=>$id));
		redirect('abouts/view','refresh');




}
public function active(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('aboutpage',array('status'=>'0'), array('id'=>$id));
		redirect('abouts/view','refresh');




}
public function deleteproduct()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('aboutpage',array('id'=>$id));
		//echo $this->db->last_query();
		redirect('abouts/view','refresh');

}
}