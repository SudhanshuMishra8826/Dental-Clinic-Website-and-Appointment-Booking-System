<?php
 class signup_model extends CI_Model
 {


   public function isvalidate($uname,$email)
    {
      $q=$this->db->where(['uname'=>$uname,'email'=>$email])
                    ->get('patient');

                  if($q->num_rows())
                  {
                    return True;

                  } 
                  else 
                  {
                    return False;
                    
                   } 

    }         





    public function insert($uname,$email,$password,$occupation,$address,$sex,$dob,$contact1,$contact2)
    {
      $data=array('uname' =>$uname,
                  'email'=>$email,
                  'password'=>$password,
                  'occupation'=>$occupation,
                  'address'=>$address,
                  'sex'=>$sex,
                  'dob'=>$dob,
                  'contact1'=>$contact1,
                  'contact2'=>$contact2
                );
      if($this->db->insert('patient', $data))
      {
        return True;
    	  
    }  
    else{
      return False;

    }       
       

   }
 } 
 ?>