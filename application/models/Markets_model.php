<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Markets_model extends CI_Model {
    function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('cookie', 'url')); 
    }

	public function markets_data()		{
			
			$result=$this->db->get('markets');
			return $result->result();

    }
    public function marketcap_api(){
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
  'start' => '1',
  'limit' => '5000',
  'convert' => 'USD'
];

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: 4d64f1b1-03d1-4d0d-8e7f-c804a2726e21'
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            // set the request URL
  CURLOPT_HTTPHEADER => $headers,     // set the headers 
  CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
//print_r(json_decode($response)); 
// print json decoded response
$result=json_decode($response);
return $result;

curl_close($curl); // Close request
    }
    
    public function cry_api(){
        $data=file_get_contents("https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd");
$decode=json_decode($data);
return $decode;
    }
    
    public function payment($array){
        
        $this->db->insert('Payment_history',$array);
        return 1;
    }
    
    public function subscribe($array,$email){
        $this->db->where($array);
        $query = $this->db->get('subscribe_new');
        // return $this->db->last_query();
        if ($query->num_rows() > 0) {
            /*$cookie = array(
                        'name'   => 'remember_me',
                        'value'  => true,                            
                        'expire' => '300',                                                                                   
                        'secure' => TRUE
                        );
               set_cookie($cookie);*/
           // setcookie("email", $email, time() + (60 * 20));
           $test=array("email"=>"skip");
           $this->session->set_tempdata($test, 300);
                //$this->session->set_userdata($array);
            return false;
        }else{
            /* $cookie = array(
                        'name'   => 'remember_me',
                        'value'  => $email,                            
                        'expire' => '300',                                                                                   
                        'secure' => TRUE
                        );
               set_cookie($cookie);*/
               
          $this->db->insert('subscribe_new',$array);
          $this->session->set_tempdata($array, 300);
              //  $this->session->set_userdata($array);
        return true;
        }
    }

}