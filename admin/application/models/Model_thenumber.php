<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_thenumber extends CI_Model {


public function add()
		{
			extract($_POST);
		$img=$fname=time().'image'.rand().'.jpg';	
				$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			
			$add=array(
				'ip'=>$ip,
				'nu'=>$cat,
				'name'=>$name,
				'designation'=>$designation,
				'description'=>$description,
				'facebook'=>$facebook,
				'twitter'=>$twitter,
				'linkedin'=>$linkedin,
				'pinterest'=>$pinterest,
				'san1'=>$san1,
				'san2'=>$san2,
				'san3'=>$san3,
				'image'=>$img	
				);
			$res=$this->db->insert('thenumber',$add);
			//echo $this->db->last_query();
			if($res==true)

			{
				$config['file_name']  = $fname;
				$image_path = realpath(APPPATH . '../assets/aboutpage/');

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
				$this->upload->do_upload('image');
				$this->upload->data();
				
				$this->session->set_flashdata('msg','Sucessfully Added');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Already there');
		}

}



		

public function singleView()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('thenumber',array('id'=>$id))->row();
	return $query;
}

public function singleView1()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('contactinquiry',array('id'=>$id))->row();
	return $query;
}

public function singleView2()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('abstractsubmission',array('id'=>$id))->row();
	return $query;
}


public function update()
{
	$id=$this->uri->segment(3);
	extract($_POST);


	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
		
				$gt=$this->db->get_where('thenumber',array('id'=>$id))->row();
				
	            @unlink($del);
			$add=array(
				'ip'=>$ip,
				'number1'=>$number1,
				'number2'=>$number2,
				'name'=>$name,
				'designation'=>$designation,
				'description'=>$description,
				'facebook'=>$facebook,
				'twitter'=>$twitter,
				'linkedin'=>$linkedin,
				'san1'=>$san1,
				'san2'=>$san2,
				'san3'=>$san3,
				'pinterest'=>$pinterest
				);
			$res=$this->db->update('thenumber',$add, array('id'=>$id) );
			if($res==true)
			{
			
				$this->session->set_flashdata('msg','Sucessfully Update');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Already there');
		}

}


public function update2()
{
	$id=$this->uri->segment(3);
	extract($_POST);


	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
		
				$gt=$this->db->get_where('thenumber',array('id'=>$id))->row();
				
	            @unlink($del);
			$add=array(
				'ip'=>$ip,
				'number1'=>$number1,
				'number2'=>$number2,
				'name'=>$name,
				'description'=>$description,
				'designation'=>$designation,
				
				'facebook'=>$facebook,
				'twitter'=>$twitter,
				'pinterest'=>$pinterest
				);
			$res=$this->db->update('thenumber',$add, array('id'=>$id) );
			if($res==true)
			{
			
				$this->session->set_flashdata('msg','Sucessfully Update');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Already there');
		}

}




}		

?>