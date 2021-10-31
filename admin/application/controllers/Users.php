<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
			
			$this->load->model('Model_users');
				$this->Model_users->add();

		}
		$this->load->view('users/addcommittee');
		$this->load->view('include/footer');

	}

	

	public function lastlogin()
	{
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('users/lastlogin');
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

	public function speaker()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('committee/speaker');
		$this->load->view('include/footer');
	}
	

	public function singlepage()
	{
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->model('Model_users');
			$data['k']=$this->Model_users->singleView();
		$this->load->view('include/nav');
		$this->load->view('gallery/singlegallery', $data);
		$this->load->view('include/footer');
	}

public function update()
{
	$id=$this->uri->segment(3);
	if(isset($_POST['submit']))
			{
				$this->load->model('Model_users');
				$this->Model_users->update();				
			}
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			$this->load->model('Model_users');
			$data['k']=$this->Model_users->singleview();
			
			$this->load->view('users/update',$data);
			$this->load->view('include/footer');
}




public function inactive(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('tbl_admin_user',array('status'=>'1'), array('aid'=>$id));
		redirect('users/addmember','refresh');




}
public function active(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('tbl_admin_user',array('status'=>'0'), array('aid'=>$id));
		redirect('users/addmember','refresh');




}
public function deletegallery()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('tbl_admin_user',array('aid'=>$id));
		//echo $this->db->last_query();
		redirect('users/addmember','refresh');

}
}
