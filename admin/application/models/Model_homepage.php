<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_homepage extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>

	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	



	public function contentupdate($a1, $a2){
		$this->db->where('id',$a2);
		$response=$this->db->update('bg', $a1);
		return $response;
	}



	public function links($a1, $a2){
		$this->db->where('id',$a2);
		$response=$this->db->update('quicklinks', $a1);
		return $response;
	}

	public function links2($a1, $a2){
		$this->db->where('id',$a2);
		$response=$this->db->update('socialmedia', $a1);
		return $response;
	}


	}

