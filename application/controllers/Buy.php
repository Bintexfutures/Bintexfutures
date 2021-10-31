<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buy extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $data_s=$this->session->userdata('username'); 
		if (!$this->session->userdata('userlogin')) {
			redirect('login', 'refresh');
		}
	}


	public function index()
	{
$reee=$this->session->userdata('userlogin');
		if(isset($_POST['submit'])){
    		extract($this->input->post());   
			$ip=$_SERVER['REMOTE_ADDR'];
    		$orderId="ORD".rand();
    		
    		$extramount = $this->db->get_where('tokenamount', array('id'=>$extype))->row();
    		$referral = $this->db->get_where('users', array('id'=>$reee->id))->row();

          date_default_timezone_set('UTC');
           
		        $data = array(
		           'orderId' => $orderId,
		           'ip' => $ip,
		           'crdate'=>date('Y-m-d H:i:s', time()),
		           'customer_id' => $reee->id,
		           'customer_name' => $reee->username,
		           'referral' => @$referral->referral,
		           'referral_token' => $referral_token,
		           'extype' => $extype,
		           'extramount' => $extramount->amount, 
		           'amount' => $camount,
		           'percent_token' => $percent_token,
		           'buy_token' => $buy_token,
		           'totalamount' => $totalamount,
		           'status' => 1
		       );

        	$this->db->insert('token_value', $data); 
        	$id = $this->db->insert_id();
         	redirect('buyorder/view/'.$id);
		
	}

	



		$this->load->view('includes/header_dashboard');
		$this->load->view('buy');
	//	$this->load->view('includes/footer_dashboard');


		
	}
}
