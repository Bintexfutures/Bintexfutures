<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends CI_Controller {

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
	
	public function index()
	{
		
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('banners/add');
		if(isset($_POST['submit']))
		{
			
			$this->load->model('Model_banners');
			$this->Model_banners->insert();

		}
		$this->load->view('include/footer');



	}
	


	public function update()
	{
		
		
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			
 			

			if(isset($_POST['submit']))
			{
				
				$this->load->model('Model_banners');
				$this->Model_banners->edit();
				
			}
			$this->load->view('banners/edit');
			$this->load->view('include/footer');
			
		

}

public function view()
	{
		
			$id=$this->uri->segment(3);
	       $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');		
			$this->load->model('Model_banners');
 $data['k']=$this->Model_banners->singleView();

			
			$this->load->view('banners/view',$data);
			$this->load->view('include/footer');
			
		

}

public function delete(){

		
		
		
			$id=$this->uri->segment(3);
		$del=$this->db->delete('tbl_banners',array('id'=>$id));
		redirect('banners','refresh');




}
public function activebanners(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('tbl_banners',array('status'=>'1'), array('id'=>$id));
		redirect('banners','refresh');
}


public function reclyebanners()
	{
		
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('banners/reclyebanners');
		
		$this->load->view('include/footer');



	}

}