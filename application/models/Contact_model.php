 <?php
 class contact_model extends CI_Model{ 
  
    public function insert($uname,$email,$contact,$subject,$message)
    {
      $data=array('uname' =>$uname,
                  'email'=>$email,
                  'contact'=>$contact,
                  'subject'=>$subject,
                  'message'=>$message,                   
                );
      if($this->db->insert('contact', $data))
      {
        return True;
    	  
    }  
    else{
      return False;

    }       
       

   }

   public function fetch(){
     
  $q="select * from contact";
  $res=$this->db->query($q);
  //var_dump($res->result()[0]);
  return $res->result();
   
   }
   





 } 
 ?>