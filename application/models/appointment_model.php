<?php 
class appointment_model extends CI_Model 
{
	function saverecords($name,$email,$userid,$date,$time,$appointmentfor)
	{
	$query="insert into appointments values('','$name','$email','$userid','$date','$time','$appointmentfor','requested')";
	$this->db->query($query);
	$query="select id from appointments where userid='$userid' and name='$name' and date='$date' and time='$time' and email='$email' and status='requested' and appointmentfor='$appointmentfor'";
	$r=$this->db->query($query);
	return $r->result();
	}
	function get_appointments()
	{
	$this->load->library('session');
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
	$query="select * from appointments where userid='$id'";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function create_notifications($apid,$service,$date,$time)
	{
	$this->load->library('session');
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
	$query="insert into notifications values('$id','$apid','','You have requested an appointment for $service at $date , $time ' ,'unseen')";
	$this->db->query($query);
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function get_notifications()
	{
	$this->load->library('session');
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
	$query="select * from notifications where uid='$id' and status='unseen'";
	$r=$this->db->query($query);
	$q="update notifications set status='seen' where uid='$id' and status='unseen'";
	$this->db->query($q);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}







	function check_notifications()
	{
	$this->load->library('session');
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
	$query="select * from notifications where uid='$id' and status='unseen'";
	$r=$this->db->query($query);
	 if($r->num_rows())
                  {
                  	return True;

                  } 
                  else 
                  {
                  	return False;
                   	
                   } 

	//return $r->result();


	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}











	function get_seen_notifications()
	{
	$this->load->library('session');
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
	$query="select * from notifications where uid='$id' and status='seen'";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
}
?>