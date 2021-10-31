<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcrypto extends CI_Model {

	public function addgallery()
		{
			extract($_POST);
			

		
	
			
				$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			
			$add=array('amount'=>$amount
				
			
			
				
				);
			$res=$this->db->insert('tokenamount',$add);
			//echo $this->db->last_query();
			if($res==true)

			{
			
				
				$this->session->set_flashdata('msg','Sucessfully Added ');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','already there');
		}

}

public function singleView()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('tokenamount',array('id'=>$id))->row();
	return $query;
}

public function updategallery()
{
	$id=$this->uri->segment(3);
	extract($_POST);


	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
		
				$gt=$this->db->get_where('tokenamount',array('id'=>$id))->row();
	         
			$add=array(
				'amount'=>$amount
				
				);
			$res=$this->db->update('tokenamount',$add, array('id'=>$id) );
			//echo $this->db->last_query();
			if($res==true)

			{
			


				$this->session->set_flashdata('msg','Sucessfully Update');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','already there');
		}

}

}




		

?>