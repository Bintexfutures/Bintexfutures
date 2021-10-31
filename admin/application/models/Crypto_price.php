<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//author :santhosh yelagadnual
//using crypto currancy update
class Crypto_price extends CI_Model {
    
    function __construct()
	{
		parent::__construct();
	
	}
	
	/*get price list*/
	public function getprie(){
	    $this->db->select('*');
	   $result= $this->db->get('crypto_price');
	    print_r($result->result());
	}

}		

?>