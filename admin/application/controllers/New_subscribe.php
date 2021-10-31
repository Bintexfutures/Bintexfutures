<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_subscribe extends CI_Controller {

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
		$this->load->model('Subscribe_model');
	}
	
	public function index(){	
		$this->load->view('include/header');
		$this->load->view('include/topbar');
		$this->load->view('include/nav');
		$this->db->select('*');
		$result=$this->db->get('subscribe_new');
		$data['data']=$result->result();
		//get images
		$this->db->select('*');
		$image=$this->db->get('image');
		$data['image']=$image->result();
		$this->load->view('new_subscribe',$data);
		$this->load->view('include/footer');
	}
	
	public function delete(){
	    $id=$_GET['id'];
	    $this->db->where('id',$id);
	    $data=$this->db->delete('subscribe_new');
	    //$data = $this->Subscribe_model->subscribe($id);
	    if($data==1){
	        $this->session->set_flashdata('response', 'successfully deleted');
	        redirect(base_url()."New_subscribe");
	       // $this->index();
	        
	    }else{
	       redirect(base_url()."New_subscribe");

	    }
	 
	}
	//add by santhosh
	//usage:-get userlist
	public function Userlist(){
	    header('Access-Control-Allow-Origin: https://www.bintexfutures.com/');
	    $this->db->select('*');
		$result=$this->db->get('subscribe_new');
		$data=$result->result();
        echo json_encode($data);
	    
	}
	/*add by santhosh yelagandula */
	/*usage:- send mails*/
		public function send(){
	   $to=$this->input->post('userdata');
	   $img=$this->input->post('img');
	   if(!empty($to)){
     
        $comment=!empty($this->input->post('comment'))?$this->input->post('comment') :'';
        $sub=!empty($this->input->post('sub'))?$this->input->post('sub'):'';
	    $subject = $sub;
        $img_set="https://bintexfutures.com/admin/assets/img/".$img;
        //$headers .= 'Cc: myboss@example.com' . "\r\n";
	   //$to_implode=implode(',',$to);
	   foreach($to as $key=>$val){
	    $array_list=array('email'=>$val,'content'=>$comment,'subject'=>$subject,'img'=>$img_set,'status'=>0);
	    $result=$this->db->insert('cron',$array_list);
	   }
	  
	   if($result==TRUE){
	        $message=array('msg'=>"Message sent successfully");
	      $this->session->set_flashdata($message);
	      //$this->sendDailyEmail('mail',$to);
	   }else{
	        $message=array('msg'=>"Message sent failed");
	      $this->session->set_flashdata($message);
	   }
	   //$send= mail($to_implode,$subject,$html_content,$headers);
	   
	   /*if(!empty($send)){
	       $message=array('msg'=>"Message sent successfully");
	      $this->session->set_flashdata($message); 
	   }else{
	       $message=array('msg'=>"Message sent failed");
	      $this->session->set_flashdata($message);
	   }*/
	   redirect('New_subscribe');
	   
	   }
	   
        
	    
	}
	/*cron */
	public function sendDailyEmail($mail,$data_to){
	   //$mail
	    if($mail=="mail"){
	    /*if($this->input->is_cli_request())
        {*/            
            $this->db->select('*');
            $this->db->where(array('status'=>0));
            $data=$this->db->get('cron');
            
            // More headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
            $headers .= 'From: Bintex Futures<do-not-reply@bintexfutures.com>' . "\r\n";
            if(!empty($data)){
                foreach($data->result() as $key=>$value){
                    
                    $email_array=explode(',',$value->email);
                    
                    foreach($email_array as $key=>$value_em){
                        if (in_array($value_em, $data_to))
                          {
                          $data_html=array('img_set'=>$value->img,'comment'=>$value->content,'email'=>$value_em);
                            $this->load->view('email/contact',$data_html);
                            //print_r($this->load->view('email/contact',$data_html));
                            //exit;
                            $html_content = $this->output->get_output();
                            $send= mail($value_em,$value->subject,$html_content,$headers);
                            if($send==TRUE){
                            $this->db->where(array('id'=>$value->id));
                            $this->db->set(array('status'=>1));
                            $this->db->update('cron');
                          }
                        
                    }
                    }
                    
                }
        
            }
	    }
        /*}
        else
        {
            echo "You dont have access";
        }*/
	}
	public function unsubscribe(){
	    $email=$this->input->get('email');
	    $this->db->where(array('email'=>$email));
	    $this->db->delete('subscribe_new');
	    exit;
	}
	
	/*end*/
	public function test(){
	     // More headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
            $headers .= 'From: Bintex Futures<do-not-reply@bintexfutures.com>' . "\r\n";
            $html_content="<h1>own mail</h1>";
            $send= mail("5b6santhosh@gmail.com","SELF TEST",$html_content,$headers);
	}
	/*test end*/
	public function file(){
	   // $this->form_validation->set_rules('file', 'file', 'required');
	     //if ($this->form_validation->run() == false) {
            print_r($this->input->post('file'));
            $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['max_size'] = 50000;
                $config['overwrite'] = FALSE;
                //$config['file_name'] = $this->input->post('file');
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file')) {
                    $array = array('msg',$this->upload->display_errors());
                    $this->session->set_flashdata($array);
                    //$this->index();
                     redirect('New_subscribe');
                } else {
                    $array=array('image'=>$_FILES['file']['name']);
                    $response=$this->db->insert('image',$array);
                    if($response==TRUE){
                        $this->session->set_flashdata(array('msg',"Image added successfully"));
                    redirect('New_subscribe');
                    }else{
                        $this->session->set_flashdata(array('msg',"Image added failed"));
                    redirect('New_subscribe');
                    }
                    
                }
       
	}
	
}
