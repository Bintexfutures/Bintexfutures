<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()	{
		if(isset($_POST['submit'])){
    		extract($this->input->post());
        	$ip_address = $this->input->ip_address();
    		@$query = $this->db->get_where('users', array('email' => $username, 'password'=>$password));
			   //echo $this->db->last_query();
			if ($query->num_rows()){
			    //this section use for validation   writen by santhosh
			   foreach ($query->result() as $row){
			     if($row->status=='1'){
			         $res=$query->row();
		$row = array('userlogin' => $res );
		$this->session->set_userdata($row);
		        $data_log = array(
		           'ip_address' => $ip_address ,
		           'username' => $username);
        	$this->db->insert('sub_log', $data_log); 
         	redirect('dashboard');
			     }else{
			         $this->session->set_flashdata('message', 'Please verrify your email');
			     }
			     //end
			   }
		}
		else{
    	$this->session->set_flashdata('message', 'Login details Does Not Match ! ');
		}
	}
	//	$this->load->view('login');
	}
}
