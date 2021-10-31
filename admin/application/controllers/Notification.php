<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

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
	public function view()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('notification/view');
		$this->load->view('include/footer');
	}

	public function view_all()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('notification/view_all');
		$this->load->view('include/footer');
	}
	public function add()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		if(isset($_POST['submit'])){
			
			$this->load->model('Mnotification');
				$this->Mnotification->add();

		}
		$this->load->view('notification/add_notification');
		$this->load->view('include/footer');
	}
		public function kyc()
	{	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->load->view('registration/kyc');
		$this->load->view('include/footer');
	}

	public function delete()
{
		$id=$this->uri->segment(3);
		$del=$this->db->delete('notification',array('id'=>$id));
		//echo $this->db->last_query();
		redirect('notification/view_all/'.$this->uri->segment(4),'refresh');

}
}
