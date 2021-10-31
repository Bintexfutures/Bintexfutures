<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mgallery extends CI_Model {

	public function addgallery()
		{
		   $id=$this->uri->segment(3);
			extract($_POST);
		$img=$fname=time().'image'.rand().'.jpg';
			
			$add=array(
			    'transfer_id'=>$category,
				'image'=>$img
				);
			$res=$this->db->update('token_value', $add , array('id'=>$id));
			//echo $this->db->last_query();
			if($res==true)

			{
				$config['file_name']  = $fname;
				$image_path = realpath(APPPATH . '../assets/');

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
				
				$this->session->set_flashdata('msg','Sucessfully Added ');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','already there');
		}

}



}




		

?>