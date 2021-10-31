<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron_mail extends CI_Controller {
    	function __construct()
	{
		parent::__construct();
		
	}
/*cron */
	public function sendDailyEmail(){
	   //$mail
	    /*if($this->input->is_cli_request())
        { */         
            $this->db->select('*');
            $this->db->where(array('status'=>0));
            $data=$this->db->get('cron');
            
            // More headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
            $headers .= 'From: Bintex Futures<do-not-reply@bintexfutures.com>' . "\r\n";
            
            if(!empty($data)){
                foreach($data->result() as $key=>$value){
                          $data_html=array('img_set'=>$value->img,'comment'=>$value->content,'email'=>$value->email);
                            $this->load->view('email/contact',$data_html);
                            $html_content = $this->output->get_output();
                            $send= mail($value->email,$value->subject,$html_content,$headers);
                            if($send==TRUE){
                            $this->db->where(array('id'=>$value->id));
                            $this->db->set(array('status'=>1));
                            $this->db->update('cron');
                            }
                        
                    }
                    }
                    
        //}
       /* else
        {
            echo "You dont have access";
        }*/
        exit;
	}
	public function unsubscribe(){
	    $email=$this->input->get('email');
	    $this->db->where(array('email'=>$email));
	    $this->db->delete('subscribe_new');
	    exit;
	}
}