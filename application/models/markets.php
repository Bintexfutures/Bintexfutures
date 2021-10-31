<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Markets extends CI_Model {

	public function markets_data()		{
			
			$result=$this->db->get('markets');
			return $result->result();

    }

}