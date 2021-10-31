<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_reg extends CI_Model {


public function add()
		{
			extract($_POST);
			$ip=$_SERVER['REMOTE_ADDR'];
			
			$add=array(
				'ip'=>$ip,
				'plan'=>$plan,
				'amount1'=>$amount1,
				'amount2'=>$amount2,
				'amount3'=>$amount3,
				'amount4'=>$amount4,
				'amount5'=>$amount5,
				'amount6'=>$amount6
				);
			$res=$this->db->insert('registrationamount',$add);
			//echo $this->db->last_query();
			if($res==true)
			{
				$this->session->set_flashdata('msg','Sucessfully Added');
			}
			else{
			$this->session->set_flashdata('error','already there');
		}
}

public function singleView()
{
	$id=$this->uri->segment(3);
	$query=$this->db->get_where('registrationamount',array('id'=>$id))->row();
	return $query;
}



	public function links($a1, $a2){
		$this->db->where('id',$a2);
		$response=$this->db->update('registrationdates', $a1);
		return $response;
	}

	
public function update()
{
	$id=$this->uri->segment(3);
	extract($_POST);	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];
			if(@$nm!=""){

			$add=array(
				'ip'=>$ip,
				//'type'=>$type,
				//'plan'=>$plan,
				'amount1'=>$amount1,
				'amount2'=>$amount2,
				'amount3'=>$amount3,
				'amount4'=>$amount4,
				'amount5'=>$amount5,
				'amount6'=>$amount6
				);
			$res=$this->db->update('registrationamount',$add, array('id'=>$id) );
			if($res==true)
			{


				$this->session->set_flashdata('msg','Sucessfully Update');
			}
			
			
			else{
				
			$this->session->set_flashdata('error','Already there');
		}
}
else{
	$add=array(
				'ip'=>$ip,
				//'type'=>$type,
				//'plan'=>$plan,
				'amount1'=>$amount1,
				'amount2'=>$amount2,
				'amount3'=>$amount3,
				'amount4'=>$amount4,
				'amount5'=>$amount5,
				'amount6'=>$amount6
				
				);
			$res=$this->db->update('registrationamount',$add, array('id'=>$id) );
			if($res==true)
			{	
			  $this->session->set_flashdata('msg','Sucessfully Update');
			}
			
			
			else{				
			$this->session->set_flashdata('error','Already there');
		    }

}
}


public function update1()
{
	extract($_POST);	
			$date=date('y-m-d h:i:s');
			$ip=$_SERVER['REMOTE_ADDR'];	

			$add=array(
				'amount1'=>$amount1,
				'amount2'=>$amount2,
				'amount3'=>$amount3,
				'amount4'=>$amount4,
				'amount5'=>$amount5,
				'amount6'=>$amount6
				);
			$res=$this->db->update('accommodation',$add, array('id'=>1) );
			if($res==true){ 
				$this->session->set_flashdata('msg','Sucessfully Update'); }			
			else{ 
				$this->session->set_flashdata('error','Already there'); }
}




}		

?>