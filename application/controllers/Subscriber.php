<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subscriber extends CI_Controller {
     public function __construct()
    {
       
        parent::__construct();
        $this->load->library('session');
    }
	public function index()
	{

		$this->load->view('siteaccess');
		//$this->load->view('includes/footer');
	}
	/*public function bntxpay(){
	    $this->load->view('bntxpay');
	}*/
	/* subscription function added by santhosh*/
	public function subscribe(){
	    $this->load->library('session');
	    $this->load->library('form_validation');
	       $this->form_validation->set_rules('email', 'Username', 'required|valid_email');

	     if ($this->form_validation->run() == FALSE)
                {
                    echo validation_errors();
    	} else{
    	    $this->load->model('Markets_model');
    	    $email=$this->input->post('email');
    	    $array=array('email'=>$email);
            $response=$this->Markets_model->subscribe($array);
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
                      //print_r(json_encode(array('msg'=>"Thank you for subscribe",'email'=>$email,'success'=>true)));
                      
                      //redirect(base_url());
            }else{
                echo "Already subscribed";
                //print_r(json_encode(array('msg'=>"Already subscribed",'email'=>$email,'success'=>true)));
                //redirect(base_url());
            }
    	}
    	}
    	//skip added by santhosh
    	public function skip(){
    	    $array=array('email'=>$this->input->get('id'));
    	    $this->session->set_tempdata($array, 300);
    	    //$this->session->set_userdata($array);
    	    redirect(base_url());
    	    
    	}
}
