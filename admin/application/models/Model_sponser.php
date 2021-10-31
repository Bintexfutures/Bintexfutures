<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_sponser extends CI_Model {

	
	

public function singleView()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('sponser',array('id'=>$id))->row();
	return $query;
}

public function updateabout()
{
	$id=$this->uri->segment(3);
	extract($_POST);
	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			if(@$nm!=""){
				$gt=$this->db->get_where('sponser',array('id'=>$id))->row();

			$add=array('ip'=>$ip,
				'heading'=>$heading,				
				'content'=>$content
			
				
			
				
				);
			$res=$this->db->update('sponser',$add, array('id'=>$id) );
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

				$this->session->set_flashdata('msg','Sucessfully Update Sponsor');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Sponsor already there');
		}
}
else{
	$add=array('ip'=>$ip,
				'heading'=>$heading,
				'content'=>$content );
			$res=$this->db->update('sponser',$add, array('id'=>$id) );
			//echo $this->db->last_query();
			if($res==true)

			{
				

				$this->session->set_flashdata('msg','Sucessfully Update Sponsor');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Sponsor already there');
		}

}
}




}		

?>