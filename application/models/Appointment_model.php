<?php 
class appointment_model extends CI_Model 
{
	function saverecords($name,$email,$userid,$date,$time,$appointmentfor,$phone,$doc)
	{
	$query="insert into appointments values('','$name','$email','$userid','$date','$time','$appointmentfor','requested','$phone','$doc')";
	$this->db->query($query);
	$query="select id from appointments where userid='$userid' and name='$name' and date='$date' and time='$time' and email='$email' and status='requested' and appointmentfor='$appointmentfor' and doctorName='$doc'";
	$r=$this->db->query($query);
	/*$apd=$r->result();
	foreach($apd as $row){
		$apid=$row->id;
	}
	$data['posts']=$this->appointment_model->view_appointment($apid);
	$this->load->view('appointment_recipt',$data);*/
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
	
	function view_appointment($Bid)
	{
	$q="select * from appointments where id='$Bid'";
	$res=$this->db->query($q);
	return $res->result();
	}

	function create_notifications($apid,$service,$date,$time,$phone)
	{
	$this->load->library('session');
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
	$query="insert into notifications values('$id','$apid','','You have requested an appointment for $service at $date , $time ' ,'unseen')";
	$this->db->query($query);

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://api.msg91.com/api/v2/sendsms?campaign=&response=&afterminutes=&schtime=&unicode=&flash=&message=&encrypt=&authkey=&mobiles=&route=&sender=&country=91",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "{ \"sender\": \"SOCKET\", \"route\": \"4\", \"country\": \"91\", \"sms\": [ { \"message\": \"You have requested an appointment for $service at $date , $time at ACME Dental Care\", \"to\": [ $phone] }] }",
	  CURLOPT_SSL_VERIFYHOST => 0,
	  CURLOPT_SSL_VERIFYPEER => 0,
	  CURLOPT_HTTPHEADER => array(
		"authkey: 263461A8EQMk2fl5c6a549f",
		"content-type: application/json"
	  ),
	));
	
	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	curl_close($curl);
	if ($err) {
	  echo "cURL Error #:" . $err;
	}
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