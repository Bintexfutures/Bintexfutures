<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_media extends CI_Model {


public function add()
		{
			extract($_POST);
		$img=$fname=time().'image'.rand().'.jpg';	
				$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			
			$add=array(
				'ip'=>$ip,
				'heading'=>$heading,
				 'url'=>$url,
				'description'=>$description,
				'image'=>$img	
				);
			$res=$this->db->insert('media',$add);
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
				
				$this->session->set_flashdata('msg','Sucessfully Added ');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Already there');
		}

}



		

public function singleView()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('media',array('id'=>$id))->row();
	return $query;
}

public function update()
{
	$id=$this->uri->segment(3);
	extract($_POST);
	$img=$fname=time().'image'.rand().'.jpg';
	$nm=$_FILES['image']['name'];

	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			if($nm!=""){
				$gt=$this->db->get_where('media',array('id'=>$id))->row();
				@$del="assets/aboutpage/".$gt->image;
	            @unlink($del);
			$add=array(
				'ip'=>$ip,
				'heading'=>$heading,
				 'url'=>$url,
                'description'=>$description,
				'image'=>$img	
				);
			$res=$this->db->update('media',$add, array('id'=>$id) );
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

				$this->session->set_flashdata('msg','Sucessfully Updated');
			}
			
			
			else{
				
			$this->session->set_flashdata('error',' Already there');
		}
}
else{
	$add=array(
				'ip'=>$ip,
				'heading'=>$heading,
				 'url'=>$url,
				'description'=>$description
				
				);
			$res=$this->db->update('media',$add, array('id'=>$id) );
			if($res==true)
			{	
			  $this->session->set_flashdata('msg','Sucessfully Updated');
			}
			
			
			else{				
			$this->session->set_flashdata('error',' Already there');
		    }

}
}




}		

?>