<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_san extends CI_Model {

	public function insert()
		{

	$id=$this->uri->segment(3);
	    if(isset($_POST['submit'])){
	    	extract($_POST);
			
			$img=$fname=time().'image'.rand().'.jpg';
			
			$add=array(
				
				'transfer_id'=>$address_wallet,
			    'image'=>$img );
		
				$res=$this->db->update('token_value', $add , array('id'=>$id));
				
			//echo $this->db->last_query();
			if($res==true)

			{
				
				$config['file_name']  = $fname;
				$image_path = realpath(APPPATH . '../assets/');
				print_r($image_path);

				$config['upload_path'] = $image_path;

				//$config['upload_path']=APPPATH.'../uploads/';
				//$config['file_name'] =$img ;
				$config['allowed_types']='gif|jpeg|jpg|png';
				 
				$this->load->library('upload',$config);
				$this->upload->do_upload('image');

				$this->upload->data();
				//echo $config['upload_path'];
            $this->session->set_flashdata('msg','<h2 class="text-success text-center"><i class="fa fa-check" aria-hidden="true"></i> You have successfully created an order</h2>');
			redirect('buyorder/view/'.$id,"refresh");
				
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Fail To Add Banner');
		}


	}
	
		}
public function singleView()
{
	$id=$this->uri->segment(3);

	$query=$this->db->get_where('tbl_banners', array('id'=>$id))->row();
	return $query;
}

public function edit()
{
$id=$this->uri->segment(3);
	extract($_POST);
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];

			$img=$fname=time().'updated_image'.rand().'.jpg';
			$nm=$_FILES['updated_image']['name'];
			if($nm!="")
			
			{
		$gt=$this->db->get_where('tbl_banners',array('id'=>$id))->row();
					$del=("../assets/images/".@$gt->image);
				$update=array(
					'cr_date'=>$date,
				'ip'=>$ip,
				'title'=>$title,
				'info'=>$info,			
				'image'=>$img,
				'cat'=>$cat
				
				);
		$res=$this->db->update('tbl_banners',$update,array('id'=>$id));
				if($res)
				{
					$config['file_name']  = $fname;
					$image_path = realpath(APPPATH . '../assets/images/');

				$config['upload_path'] = $image_path;

				//$config['upload_path']=APPPATH.'../uploads/';
				$config['allowed_types']='gif|jpeg|jpg|png';
				$this->load->library('upload',$config);
				$this->upload->do_upload('updated_image');
				$this->upload->data();
				
				$this->session->set_flashdata('msg','Sucessfully Updated ');
				redirect('banners',"refresh");
				}

			}
			else
			{
				$update=array(
					'cr_date'=>$date,
				'ip'=>$ip,
				'title'=>$title,
				'info'=>$info,
				'cat'=>$cat

				
				);
				$res=$this->db->update('tbl_banners',$update,array('id'=>$id));
				if($res)
				{
					$this->session->set_flashdata('msg','Sucessfully Updated ');
redirect('banners',"refresh");
				}
				else
				{
					$this->session->set_flashdata('error',' Updated Failed');
redirect('banners',"refresh");
				}
			}
}



}		

?>