<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_downloads extends CI_Model {

	
	

public function singleView()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('downloads',array('id'=>$id))->row();
	return $query;
}

public function updateabout()
{
	$id=$this->uri->segment(3);
	extract($_POST);

	
	$img=$fname=str_replace(" ","-",$_FILES['image']['name']);
	$nm=str_replace(" ","-",$_FILES['image']['name']);
   

	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			if($nm!=""){
				$gt=$this->db->get_where('downloads',array('id'=>$id))->row();
				@$del="assets/aboutpage/".$gt->image;
	            @unlink($del);
			$add=array('ip'=>$ip,
				'name'=>$name,	
				'image'=>$img
				);
			$res=$this->db->update('downloads',$add, array('id'=>$id) );
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
				$config['allowed_types']='gif|jpg|png|pdf|docx';
				$this->load->library('upload',$config);
				$this->upload->do_upload('image');
				$this->upload->data();
				//echo $config['upload_path'];

				$this->session->set_flashdata('msg','Sucessfully Update');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Already there');
		}
}
else{
	$add=array('ip'=>$ip,
				'name'=>$name );
			$res=$this->db->update('downloads',$add, array('id'=>$id) );
			//echo $this->db->last_query();
			if($res==true)

			{
				

				$this->session->set_flashdata('msg','Sucessfully Update');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Already there');
		}

}
}




}		

?>