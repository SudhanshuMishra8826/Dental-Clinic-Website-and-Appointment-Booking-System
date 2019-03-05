<?php
 class loginmodel extends CI_Model
 {
    public function isvalidate($email,$password)
    {
    	$q=$this->db->where(['email'=>$email,'password'=>$password])->get('patient');

                  if($q->num_rows())
                  {
                  	return True;

                  } 
                  else 
                  {
                  	return False;
                   	
                   } 

    }         


 } 
 ?>