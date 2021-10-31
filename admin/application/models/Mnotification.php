<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Mnotification extends CI_Model {

	public function add()
		{
			extract($_POST);
			

		
		
			
				$date=date('y-m-d h:i:s');
		
			
			$add=array(
				'crdate'=>$date,
				'heading'=>$heading,
				'content'=>$content,
				'reg_id'=>$this->uri->segment(3)
				
			
				
				);
			$res=$this->db->insert('notification',$add);
			//echo $this->db->last_query();
			//echo $this->db->last_query();
			if($res==true)

			{
				

				$this->session->set_flashdata('msg','Sucessfully courses page');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','courses already there');
		}

}


public function singleView()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('courses',array('id'=>$id))->row();
	return $query;
}

public function updatecourses()
{
	$id=$this->uri->segment(3);
	extract($_POST);
	$img=$fname=time().'image'.rand().'.jpg';
	$nm=$_FILES['image']['name'];

	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			if($nm!=""){
				$gt=$this->db->get_where('courses',array('id'=>$id))->row();
				@$del="assets/courses/".$gt->image;
	            @unlink($del);


	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			
			$add=array('ipaddress'=>$ip,
				'crdate'=>$date,
				'title'=>$title,
				'url'=>$url,
				'seo_title'=>$seo_title,
				'seo_keywords'=>$seo_keywords,
				'seo_description'=>$seo_description,
				'articles'=>$articles,
				'image'=>$img
			);
			$res=$this->db->update('courses',$add, array('id'=>$id) );
			//echo $this->db->last_query();
			if($res==true)

			{
				$config['file_name']  = $fname;
				$image_path = realpath(APPPATH . '../assets/courses/');

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

				$this->session->set_flashdata('msg','Sucessfully Update courses');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Product already there');
		}
}
else{
	$add=array('ipaddress'=>$ip,
				'crdate'=>$date,
				'title'=>$title,
				'url'=>$url,
				'seo_title'=>$seo_title,
				'seo_keywords'=>$seo_keywords,
				'seo_description'=>$seo_description,
				'articles'=>$articles
				
			
				
				);
			$res=$this->db->update('courses',$add, array('id'=>$id) );
			//echo $this->db->last_query();
			if($res==true)

			{
				

				$this->session->set_flashdata('msg','Sucessfully Update courses page');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','courses already there');
		}

}
}

}




		

?>