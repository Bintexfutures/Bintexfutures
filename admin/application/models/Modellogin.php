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

		//print_r($_POST);


		$gt=$this->session->userdata('login');

		if($new_password==$confirm_password)
		{

		$updt=array('password'=>$confirm_password);

		$res=$this->db->update('tbl_admin_user',$updt,array('aid'=>$gt->aid));

		if($res)
		{
			$this->session->set_flashdata('msg',"Successfully Changed Passwrd");

			redirect('login/changepassword','refresh');
		}
	}
	else
	{
		$this->session->set_flashdata('error',"New Password And Cofirm Password Should Be Same");
	}
	

}
}