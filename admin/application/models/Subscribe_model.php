<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscribe_model extends CI_Model {

	public function subscribe($id)
	{
		
		$res=$this->db->delete('subscribe', array('id' => $id));
         
		return $res;
		
	
	}


}