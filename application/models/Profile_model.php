<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_model {
    public function profile(){
    extract($_POST);
    print_r($_POST);
    die();
     $data = array(
		           'firstname' => $fname ,
		           'lastname' => $lastname,
		           'middlename' => $middlename,
		           'postalcode' => $postalcode,
		           'address' => $address,
		           'country' => $country ,
		           'dateofbirth' => $dateofbirth,
		           'location' => $location);
    $this->db->insert('profile',$data);
    echo $this->db->last_query();


    }
}