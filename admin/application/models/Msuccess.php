<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msuccess extends CI_Model {

	public function addsuccess()
		{
			extract($_POST);
			

		
		$img=$fname=time().'image'.rand().'.jpg';
			
				$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			
			$add=array('ipaddress'=>$ip,
				'crdate'=>$date,
				'name'=>$name,
				'professional'=>$professional,
				'descriptions'=>$descriptions,
				
				'image'=>$img,
				
			
			
				
				);
			$res=$this->db->insert('success',$add);
			//echo $this->db->last_query();
			if($res==true)

			{
				$config['file_name']  = $fname;
				$image_path = realpath(APPPATH . '../assets/success/');

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
				
				$this->session->set_flashdata('msg','Sucessfully Added sucess story ');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','sucess already there');
		}

}

public function singleView()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('success',array('id'=>$id))->row();
	return $query;
}

public function updatesuccess()
{
	$id=$this->uri->segment(3);
	extract($_POST);
	$img=$fname=time().'image'.rand().'.jpg';
	$nm=$_FILES['image']['name'];

	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			if($nm!=""){
				$gt=$this->db->get_where('success',array('id'=>$id))->row();
				@$del="assets/success/".$gt->image;
	            @unlink($del);
			$add=array('ipaddress'=>$ip,
				'crdate'=>$date,
				'name'=>$name,
				'professional'=>$professional,
				'descriptions'=>$descriptions,
				
				'image'=>$img,
				
			
			
				
				);
			$res=$this->db->update('success',$add, array('id'=>$id) );
			//echo $this->db->last_query();
			if($res==true)

			{
				$config['file_name']  = $fname;
				$image_path = realpath(APPPATH . '../assets/aboutpage/');

		 $config['upload_path'] = $image_path;
			   //$config['create_thumb'] = TRUE;
$config['maintain_ratio'] = FALSE;
$config['overwrite'] = TRUE;
$config['width']         = 200;
$config['height']       = 200;

$this->load->library('image_lib', $config);

$this->image_lib->resize();

				//$config['upload_path']=APPPATH.'../uploads/';
				$config['allowed_types']='gif|jpeg|jpg|png';
				$this->load->library('upload',$config);
				$this->upload->do_upload('image');
				$this->upload->data();
				//echo $config['upload_path'];

				$this->session->set_flashdata('msg','Sucessfully Update success');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Product already there');
		}
}
else{
	$add=array('ipaddress'=>$ip,
				'crdate'=>$date,
				'name'=>$name,
				'professional'=>$professional,
				'descriptions'=>$descriptions,
				
			
				
			
			
				
				);
			$res=$this->db->update('success',$add, array('id'=>$id) );
			//echo $this->db->last_query();
			if($res==true)

			{
				

				$this->session->set_flashdata('msg','Sucessfully Update about page');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Products already there');
		}

}
}

}




		

?>