<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('cookie', 'url')); 
         
	    $this->load->library('form_validation');
      } 
	public function index()
	{
	    
	    /*total visitors*/
	    $_SESSION['session']=session_id();
	  
         $current_time=time();
         $timeout = $current_time - (60);
        
         $this->db->select('session');
         $this->db->from('total_visitors');
         $this->db->where('session',$_SESSION['session']);
         $query = $this->db->get();
         if ($query->num_rows() > 0) {
         $data=array('session'=>$_SESSION['session'],'time'=>$current_time);
            $this->db->where('session', $_SESSION['session']);
            $query = $this->db->update('total_visitors', $data);
         }else{
         $data=array('session'=>$_SESSION['session'],'time'=>$current_time);
              $this->db->insert('total_visitors', $data);
         }
         /*$this->db->select('*');
         $this->db->from('total_visitors');
         $con="time>= '$timeout'";
         $this->db->where($con);*/
         $query = $this->db->get('total_visitors');
         //$total_online_visitors=$_SESSION['session'];
         $data['total_visitors']=$query->num_rows();;
	    /*end*/
	    $this->load->library('session');
	    $this->load->model('Team_model');
	    $data['team']=$this->Team_model->get();
	    $this->load->model('Markets_model');
	    $this->load->model('Waitlist_model');
	    $data['data']=$this->Markets_model->markets_data();
	    $data['wait']=$this->Waitlist_model->get();
	    $data['markets_cap']=$this->Markets_model->marketcap_api();
	    
	    $result= $this->db->get('crypto_price');
	    $data['price']=$result->result();
	    
	    $db2=$this->load->database('database2', TRUE);
	    $db2->select('*');
        $q = $db2->get('post');
        $result2 = $q->result();
        $data['posts']=$result2;
	    
		$this->load->view('includes/header');
		$this->load->view('home',$data);
		$this->load->view('includes/footer');
	}
	public function price(){
	    $name=$this->input->get('name');
	    if(!empty($name)){
	    $result= $this->db->get('crypto_price');
	    $data=$result->result_array();
	   print($data[0][$name]);
	    }else{
	         http_response_code(404);
	         //echo '<p style="width:90%; border: 1px red solid; color:black; margin-left:50px; margin-top:10px;margin-bottom:10px; margin-right:50px; padding:40px;">404 - (access not allowed).</p>';
	    }
	}
	/*public function bntxpay(){
	    $this->load->view('bntxpay');
	}*/
	/* subscription function added by santhosh*/
	public function subscribe(){
	      $this->load->library('session');
	       $this->form_validation->set_rules('email', 'Username', 'required|valid_email');

	     if ($this->form_validation->run() == FALSE)
                {
                    echo validation_errors();
    	} else{
    	    $this->load->model('Markets_model');
    	    $email=$this->input->post('email');
    	    $array=array('email'=>$email);
            $response=$this->Markets_model->subscribe($array,$email);
            if($response==true){
                 $Admin = "no-reply@bintexfutures.com";
                      //$Admin = "5b6santhosh@gmail.com";
                      $user= $email;
                    $toname = 'Dear User';
                    //$emailfrom = 'bintexfu@bintexfutures.com';
                    $emailfrom = 'no-reply@bintexfutures.com';
                    $fromname = 'Bintexfutures Support';
                    $subject = 'Thank you for subscribe';
                     $data['user']="";
                    $data['email']=$email;
                    $html=$this->load->view('subscribe',$data,true);
                    $messagebody = $html;
                    $headers = 
                    	'Return-Path: ' . $emailfrom . "\r\n" . 
                    	'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
                    	'X-Priority: 3' . "\r\n" . 
                    	'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
                    	'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
                    	'MIME-Version: 1.0' . "\r\n" . 
                    	'Content-Transfer-Encoding: 8bit' . "\r\n" . 
                    	'Content-Type:  text/html; charset=UTF-8' . "\r\n";
                    $params = '-f ' . $emailfrom;
                    /*client*/
                     mail($user, $subject, $messagebody, $headers, $params);
                     $data['email']="$email";
                     $data['user']="admin";
                     $html_a=$this->load->view('subscribe',$data,true);
                     /*admin*/
                    $admin_message=$html_a;
                    $subject_admin = 'BNTX Subscription';
                      mail($Admin, $subject_admin, $admin_message, $headers, $params);
                      echo "Thank you for subscribe";
            }else{
                 echo "Alreaddy subscribed";
            }
    	}
    	}
	/*end*/
	public function payemrnt(){
	    echo "page was under construction";
	    return false;
	    $this->load->library('form_validation');
	    $this->load->library('session');
	    $this->form_validation->set_rules('email', 'Username', 'required|valid_email');
                    $this->form_validation->set_rules('Phone', 'Phone', 'required|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]');
                    $this->form_validation->set_rules('d_address', 'Deposite', 'required');
                    $this->form_validation->set_rules('total', 'total', 'required');
                    $this->form_validation->set_rules('ref', 'Reference Id', 'required|min_length[12]|max_length[12]');
	     if ($this->form_validation->run() == FALSE)
                {
                    $this->session->set_flashdata('msg', validation_errors());
                     unset($_POST);
                     redirect(base_url().'index.php/home/bntxpay');
                }
                else
                {
                    $email=$this->input->post('email');
                    $Phone=$this->input->post('Phone');
                    $d_address=$this->input->post('d_address');
                    $total=$this->input->post('total');
                    $qty=$this->input->post('qty');
                    $ref=$this->input->post('ref');
                    $array=array('Email'=>$email,'Phone'=>$Phone,'D_address'=>$d_address,'Price'=>$total,'tokens'=>$qty,'T_id'=>$ref);
                    $this->load->model('Markets_model');
                    $response=$this->Markets_model->payment($array);
                    if($response==TRUE){
                        $this->session->set_flashdata('msg', 'Transaction is Completed Your BNTX will be Deposited Within 20min - 40min');
                        $this->session->set_flashdata('success',1);
                         unset($_POST);
                      $Admin = "no-reply@bintexfutures.com";
                      //$Admin = "5b6santhosh@gmail.com";
                      $user= $email;
$toname = 'Dear User';
//$emailfrom = 'bintexfu@bintexfutures.com';
$emailfrom = 'no-reply@bintexfutures.com';
$fromname = 'Bintexfutures Support';
$subject = 'BNTX Purchase order details';
$html='<HTML !doctype><html><head><style>#customers td, #customers th {border: 1px solid #ddd;padding: 8px;}</style></head><body><p>Dear User Thanks For Your Purchase</p><table id="customers"><thead><tr><td>Email</td><td>Phone</td><td>Amount</td><td>BNTX Deposit Address</td><td>QTY</td><td>Transacion id</td></tr></thead><tbody><tr><td>'.$email.'</td><td>'.$Phone.'</td><td>'.$total.'</td><td>'.$d_address.'</td><td>'.$qty.'</td><td>'.$ref.'</td></tr></tbody></table></body></html>';
$messagebody = $html;
$headers = 
	'Return-Path: ' . $emailfrom . "\r\n" . 
	'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
	'X-Priority: 3' . "\r\n" . 
	'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
	'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" . 
	'Content-Transfer-Encoding: 8bit' . "\r\n" . 
	'Content-Type:  text/html; charset=UTF-8' . "\r\n";
$params = '-f ' . $emailfrom;
/*client*/
 mail($user, $subject, $messagebody, $headers, $params);
 $html_a='<HTML !doctype><html><head><style>#customers td, #customers th {border: 1px solid #ddd;padding: 8px;}</style></head><body><p>Dear Admin,</p><table id="customers"><thead><tr><td>Email</td><td>Phone</td><td>Amount</td><td>BNTX Deposit Address</td><td>QTY</td><td>Transacion Id</td></tr></thead><tbody><tr><td>'.$email.'</td><td>'.$Phone.'</td><td>'.$total.'</td><td>'.$d_address.'</td><td>'.$qty.'</td><td>'.$ref.'</td></tr></tbody></table></body></html>';
/*admin*/
$admin_message=$html_a;
$subject_admin = 'BNTX New purchase';
  mail($Admin, $subject_admin, $admin_message, $headers, $params);
redirect(base_url().'index.php/home/bntxpay');
                    }else{
                        $this->session->set_flashdata('msg', 'Please try again');
                      unset($_POST);
                     redirect(base_url().'index.php/home/bntxpay');
                    }
                }

	}
}
