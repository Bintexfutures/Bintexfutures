<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Market_model extends CI_Model {


            public function add($data)
        	{
            		
            	
            $result=$this->db->insert('markets',$data);		
            	return $result;
            
            
            }
        public function markets_get(){
			
			$result=$this->db->get('markets');
			return $result->result();
       }
       public function action($data,$data_1,$edit){
           
           
           if($edit=='edit'){
               $this->db->where($data);
              $result_=$this->db->update('markets', $data_1);
             
              if($result_){
              $msg="Successfully Record Updated";
               return $msg;    
               }
           }
           
       }
       public function delete($id){
           
               
               $result=$this->db->delete('markets',$id);
               if($result){
                   $msg="Successfully Record removed";
               return $msg;    
               
               
               }
       }



		




}		

?>