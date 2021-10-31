<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_model extends CI_Model {


	
	public function get()
	{
		$this->db->select('*');
        $this->db->from('ocm');
         $query = $this->db->get();
		return $query->result();
	}


}