<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Success extends CI_Controller {

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
	public function addsuccess()
	{
		$nav=array('title'=>'','bc'=>array(
			'home'=>base_url('dashboard'),'success'=>base_url('success/addsuccess'),'details'=>''));

		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav',$nav);
		if(isset($_POST['submit'])){
			
			$this->load->model('Msuccess');
				$this->Msuccess->addsuccess();

		}
		$this->load->view('success/addsuccess');
		$this->load->view('include/footer');

	}

	public function viewsuccess()
	{
		$nav=array('title'=>'success','bc'=>array(
			'home'=>base_url(),'success'=>base_url('success'),'Vew'=>''));
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav', $nav);
		$this->load->view('success/viewsuccess');
		$this->load->view('include/footer');
	}
	

	public function singlepage()
	{$nav=array('title'=>'success Page','bc'=>array(
			'home'=>base_url(),' success'=>base_url('success'),'single success page'=>''));
		
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->model('Msuccess');
			$data['k']=$this->Msuccess->singleView();
		$this->load->view('include/nav', $nav);
		$this->load->view('success/singlesuccess', $data);
		$this->load->view('include/footer');
	}

public function updatesuccess()
{
	$id=$this->uri->segment(3);
	if(isset($_POST['submit']))
			{
				$this->load->model('Msuccess');
				$this->Msuccess->updatesuccess();
				
				//redirect('product/updateproduct','refresh');
			}
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			$this->load->model('Msuccess');
			$data['k']=$this->Msuccess->singleview();
			
			$this->load->view('success/updatesuccess',$data);
			$this->load->view('include/footer');
}
public function inactive(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('success',array('status'=>'1'), array('id'=>$id));
		redirect('success/viewsuccess','refresh');




}
public function active(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('success',array('status'=>'0'), array('id'=>$id));
		redirect('success/viewsuccess','refresh');




}
public function deletesuccess()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('success',array('id'=>$id));
		//echo $this->db->last_query();
		redirect('success/viewsuccess','refresh');

}
}
