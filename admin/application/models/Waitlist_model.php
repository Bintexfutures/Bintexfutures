<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Waitlist_model extends CI_Model {

	public function update($id,$value)
	{
		
		$this->db->where('id', $id);
       $res= $this->db->update('waitlist', $value);
         
		return $res;
		
	
	
	}
	
	public function get()
	{
	   

		
		$this->db->select('*');
        $this->db->from('waitlist');
         $query = $this->db->get();
         
		return $query->result();
		
	
	}


}