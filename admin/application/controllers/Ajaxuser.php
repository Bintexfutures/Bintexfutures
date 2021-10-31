<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxuser extends CI_Controller {

	public function getsucategory(){
		$id=$this->uri->segment(3);
	$res	=$this->db->get_where('subcategory',  array('category'=>$id) );
	
	$re1=$res->result();
	echo "<option value=''> Select subcategory</option>";
     foreach($re1 as $re2){
      echo "<option value='$re2->id'> $re2->subcategory</option>";
	}
}
}