<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_conferences extends CI_Model {


public function add()
		{
			extract($_POST);
		$img=$fname=time().'image'.rand().'.jpg';	
				
			$ip=$_SERVER['REMOTE_ADDR'];
			
			$add=array(
				'ip'=>$ip,
				'type'=>$type,
				'name'=>$name,
				'subname'=>$subname,
				'date'=>$date,
				'url'=>$url,
				'location'=>$location,
				'desc'=>$desc,
				'image'=>$img	
				);
			$res=$this->db->insert('conferences',$add);
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
				
				$this->session->set_flashdata('msg','Sucessfully conferences');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','conferences already there');
		}

}



		

public function singleView()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('conferences',array('id'=>$id))->row();
	return $query;
}

public function singleView1()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('downloadsquiry', array('id'=>$id))->row();
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
	$img=$fname=time().'image'.rand().'.jpg';
	$nm=$_FILES['image']['name'];

	
			
			$ip=$_SERVER['REMOTE_ADDR'];
			if($nm!=""){
				$gt=$this->db->get_where('conferences',array('id'=>$id))->row();
				@$del="assets/aboutpage/".$gt->image;
	            @unlink($del);
			$add=array(
				'ip'=>$ip,
				'name'=>$name,
				'subname'=>$subname,
				'date'=>$date,
				'url'=>$url,
				'location'=>$location,
				'desc'=>$desc,
				'image'=>$img	
				);
			$res=$this->db->update('conferences',$add, array('id'=>$id) );
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

				$this->session->set_flashdata('msg','Sucessfully Update conferences');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','conferences already there');
		}
}
else{
	$add=array(
				'ip'=>$ip,
				'name'=>$name,
				'subname'=>$subname,
				'date'=>$date,
				'url'=>$url,
				'location'=>$location,
				'desc'=>$desc
				
				);
			$res=$this->db->update('conferences',$add, array('id'=>$id) );
			if($res==true)
			{	
			  $this->session->set_flashdata('msg','Sucessfully Update conferences');
			}
			
			
			else{				
			$this->session->set_flashdata('error','Member already there');
		    }

}
}




}		

?>