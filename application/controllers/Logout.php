<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Logout extends CI_Controller {
public function index(){

  $this->session->unset_userdata('userlogin');
  //$this->session->sess_destroy();
$this->session->unset_userdata($san->email);
    redirect('home','refreh');
}
}
