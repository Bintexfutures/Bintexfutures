<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_roadmap extends CI_Model {


public function add()
		{
			extract($_POST);
	//	$img=$fname=time().'image'.rand().'.jpg';	
				$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			
			$add=array(
				'cat'=>$cat,
				'name'=>$name,
				'description'=>$description
				);
			$res=$this->db->insert('roadmap',$add);
			//echo $this->db->last_query();
			if($res==true)

			{
				$this->session->set_flashdata('msg','Sucessfully Added');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Already there');
		}

}



		

public function singleView()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('roadmap',array('id'=>$id))->row();
	return $query;
}


public function update()
{
	$id=$this->uri->segment(3);
	extract($_POST);


	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];

	$add=array(
				'cat'=>$cat,
				'name'=>$name,
				'description'=>$description);
			$res=$this->db->update('roadmap',$add, array('id'=>$id) );
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