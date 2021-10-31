<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxuser extends CI_Controller {

	public function gettoken(){
		$id=$this->uri->segment(3);
	$res=$this->db->get_where('tokenamount',array('token_id'=>$id))->row();
	
	echo $res->amount;
    

}
}