<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thenumber extends CI_Controller {

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
			
			$this->load->model('Model_thenumber');
				$this->Model_thenumber->add();

		}
		$this->load->view('thenumber/add');
		$this->load->view('include/footer');

	}



public function update()
{
	$id=$this->uri->segment(3);
	if(isset($_POST['submit']))
			{
				$this->load->model('Model_thenumber');
				$this->Model_thenumber->update();				
			}
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			$this->load->model('Model_thenumber');
			$data['k']=$this->Model_thenumber->singleview();
			
			$this->load->view('thenumber/update',$data);
			$this->load->view('include/footer');
}


public function update2()
{
	$id=$this->uri->segment(3);
	if(isset($_POST['submit']))
			{
				$this->load->model('Model_thenumber');
				$this->Model_thenumber->update2();				
			}
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			$this->load->model('Model_thenumber');
			$data['k']=$this->Model_thenumber->singleview();
			
			$this->load->view('thenumber/update2',$data);
			$this->load->view('include/footer');
}


public function delete()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('thenumber',array('id'=>$id));
		//echo $this->db->last_query();
		redirect('thenumber/add','refresh');

}
}
