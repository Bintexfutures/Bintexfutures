<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modellogin extends CI_Model {

	public function checklogin()
	{
		extract($_POST);
		
		
		$data = array('username' => $user, 
			'password'=>$password,
			);
		$res=$this->db->get_where('tbl_admin_user', $data);

		//print_r($res->num_rows());
		if(@$res->num_rows()==1){
				$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			$add=array('ip'=>$ip,
				//'crdate'=>$date,
				'email'=>$user,
				'password'=>$password
				);
			$this->db->insert('logindetails',$add);
			//echo $this->db->last_query();
		$user=$res->row();
		//$row = array('login' => $user,'level'=>$data['level']);
		$row = array('login' => $user,);
		$this->session->set_userdata($row);
		$this->session->set_flashdata('loginsuccess', 'Suceessfully loggedin');
		redirect('dashboard', 'refresh');

		}
		else{
			$this->session->set_flashdata('error', 'UserName and Password invalid');
		

		}
		
	
	}

	public function passwordChange()
	{
		extract($_POST);
        		$gt=$this->session->userdata('userlogin');
        		//change password validation written by santhosh
        		$response=$this->db->get_where('users', array('id' =>$gt->id));
        	if($old_name==$response->result()[0]->password){
        	    	 if($new_password == $old_name){
		      $this->session->set_flashdata('error',"New Password And Old Password Is Same");
		 } else{
		   if($new_password==$confirm_password){
		$updt=array('password'=>$confirm_password);
		$res=$this->db->update('users',$updt,array('id'=>$gt->id));
       
		if($res)
		{
			$this->session->set_flashdata('msg',"Successfully Changed Password");
			$this->session->set_userdata('password',$old_name);

			redirect('dashboard/changepassword','refresh');
		}
        	}
        	else
        	{
        		$this->session->set_flashdata('error',"New Password And Cofirm Password Should Be Same");
        	}  
         }  
        	}else{
        	     $this->session->set_flashdata('error',"Old Password Wrong");
        	}
		 
	   //end
		    
		   
	

}
public function resetpassword()
	{
		extract($_POST);
		
		$gt=$this->uri->segment(5);

		if($password==$conpassword){
		$updt=array('password'=>$password);
		$res=$this->db->update('users',$updt,array('id'=>$gt));

		if($res)
		{
			$this->session->set_flashdata('msg',"Successfully Changed Password");

			redirect('login','refresh');
		}
	}
	else
	{
		$this->session->set_flashdata('error',"New Password And Cofirm Password Should Be Same");
	}
	

}
public function forgotpassword(){
	
extract($_POST);

		
		$res=$this->db->get_where('users', array('email' => 
			$_POST['email']))->row();


	 if(@$res->email){

$nd=array('link'=>$res->id);
$body = $this->load->view('includes/reset_password_email',$nd,TRUE);

$subject="your previous password";
$config = array(  
'mailtype'  => 'html', 
'charset'   => 'iso-8859-1'
);
$this->load->library('email');


$this->email->initialize($config);

$this->email->from('do-not-reply@bintexfutures.com', 'admin');
$this->email->to($_POST['email']);
//$this->email->cc('svrao.vasu@gmail.com');

$this->email->subject($subject);
$this->email->message($body);

$this->email->send();

$this->session->set_flashdata('msg', 'successfully sent to Your Email');
redirect('https://www.bintexfutures.com/forgotpassword');

	 }

	 else{

$this->session->set_flashdata('emsg', 'Email does not exist');
redirect('https://www.bintexfutures.com/forgotpassword');
	 }
}
}