<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientfaq extends CI_Controller {

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
			
			$this->load->model('Model_scientificschedules');
				$this->Model_scientificschedules->add();

		}
		$this->load->view('scientificschedules/addcommittee');
		$this->load->view('include/footer');

	}

	public function ocm()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('scientificschedules/ocm');
		$this->load->view('include/footer');
	}

	public function speaker()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('scientificschedules/speaker');
		$this->load->view('include/footer');
	}
	

	public function singlepage()
	{
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->model('Model_scientificschedules');
			$data['k']=$this->Model_scientificschedules->singleView();
		$this->load->view('include/nav');
		$this->load->view('scientificprogramss/singlegallery', $data);
		$this->load->view('include/footer');
	}

public function update()
{
	$id=$this->uri->segment(3);
	if(isset($_POST['submit']))
			{
				$this->load->model('Model_scientificschedules');
				$this->Model_scientificschedules->update();				
			}
	        $this->load->view('include/header');
			$this->load->view('include/topbar');
			$this->load->view('include/nav');
			$this->load->model('Model_scientificschedules');
			$data['k']=$this->Model_scientificschedules->singleview();
			
			$this->load->view('scientificschedules/update',$data);
			$this->load->view('include/footer');
}




public function inactive(){
	$id=$this->uri->segment(3);
	$del=$this->db->update('ocm',array('status'=>'1'), array('id'=>$id));
		redirect('scientificprogramss/viewgallery','refresh');
}



public function delete()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('scientific2',array('id'=>$id));
		//echo $this->db->last_query();
		redirect('clientfaq/add','refresh');

}
}
