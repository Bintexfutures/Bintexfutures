<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//author :santhosh yelagadnual
//using crypto currancy update
class Crypto_model extends CI_Model {
    
    function __construct()
	{
		parent::__construct();
	
	}
	
	/*get price list*/
	public function get(){
	    $this->db->get();
	}

}		

?>