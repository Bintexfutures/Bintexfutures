<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

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
		$this->load->view('aboutpages/homepage');
		$this->load->view('include/footer');
	}




public function editcontent(){
			$id=$this->uri->segment(3);
			extract($_POST);
			$fname='img-'.time().rand().$_FILES['img']['name'];
			$crdate=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			$data=array(
				'img'=>$fname
			);

		//print_r($data);

		$this->load->model('Model_homepage');
		$product_data=$this->Model_homepage->contentupdate($data, $id);


		
		if($product_data==true){
			$config['file_name']  = $fname;
 $image_path = realpath(APPPATH . '../assets/images/');

			   $config['upload_path'] = $image_path;
			   //$config['create_thumb'] = TRUE;
$config['maintain_ratio'] = FALSE;
$config['width']         = 200;
$config['height']       = 200;

$this->load->library('image_lib', $config);
$this->image_lib->resize();

				//$config['upload_path']=APPPATH.'../uploads/';
				$config['allowed_types']='gif|jpeg|jpg|png';
				$this->load->library('upload',$config);
				$this->upload->do_upload('img');
				$this->upload->data();
				//echo $config['upload_path'];

				//$this->session->set_flashdata('msg','Sucessfully Added about page');

			$this->session->set_flashdata('successmag','<div class="alert alert-success media fade in">
                          <p><strong>Well done!</strong> You successfully Updated About Us.</p>
                        </div>');
			redirect('homepage','refresh');
		}
		else {

			echo "Error";
		}

}



public function link(){
			$id=$this->uri->segment(3);
			extract($_POST);
			$ip=$_SERVER['REMOTE_ADDR'];
			$data=array(
				'ip'=>$ip,
				'heading'=>$heading,
				'link'=>$link
			);
		//print_r($data);
		$this->load->model('Model_homepage');
		$product_data=$this->Model_homepage->links($data, $id);		
		if($product_data==true){
			$this->session->set_flashdata('successmag','<div class="alert alert-success media fade in">
                          <p><strong>Well done!</strong> You successfully Updated.</p>
                        </div>');
			redirect('homepage','refresh');
		}
		else {

			echo "Error";
		}

}

public function link1(){
			$id=$this->uri->segment(3);
			extract($_POST);
			$ip=$_SERVER['REMOTE_ADDR'];
			$data=array(
				'ip'=>$ip,
				'heading'=>$heading,
				'link'=>$link
			);
		//print_r($data);
		$this->load->model('Model_homepage');
		$product_data=$this->Model_homepage->links2($data, $id);		
		if($product_data==true){
			$this->session->set_flashdata('successmag','<div class="alert alert-success media fade in">
                          <p><strong>Well done!</strong> You successfully Updated.</p>
                        </div>');
			redirect('homepage','refresh');
		}
		else {

			echo "Error";
		}

}

}
