<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crypto_price extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login')) {
			redirect('login' , 'refresh');
		}
		//$this->load->model('Crypto_price');
	}
	

	public function index()
	{

		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->db->select('*');
	    $result= $this->db->get('crypto_price');
	    $data['data']=$result->result();
		$this->load->view('Price/Crypro_price',$data);
		$this->load->view('include/footer');
	}
	public function update(){
	    if($_POST){
	        extract($_POST);
	        $array=array('Bitforex'=>$Bitforex,'Buyucoin_inr'=>$buyucoin_d,"Buyucoin_usdt"=>$buyucoin_us);
	        $this->db->where('id',$id);
	        $this->db->set($array);
	        $this->db->update('crypto_price');
	        $msg=array('msg'=>"Price List updated");
	        $this->session->set_flashdata($msg);
	        redirect("Crypto_price");
	    }else{
	        $this->index();
	    }
	}
}