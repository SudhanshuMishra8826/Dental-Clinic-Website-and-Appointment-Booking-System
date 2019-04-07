<?php 
class appointment_model extends CI_Model 
{
	function saverecords($name,$email,$userid,$date,$time,$appointmentfor,$phone,$doc,$fees)
	{
	$query="insert into appointments values('','$name','$email','$userid','$date','$time','$appointmentfor','requested','$phone','$doc','$fees','not paid','0')";
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
	function checkAvailability($date,$time,$doc)
	{
	$this->load->library('session');
	if(isset($_SESSION['name']))
    {
	$name=$_SESSION['name'];
    $id=$_SESSION['id'];
    }
    else
    {
    echo '<script language="javascript">';
	echo 'alert("Invalid login try again")';
	echo '</script>';
	redirect('/Dental1/homepage', 'refresh');
    //$this->load->view('homepage');
    }
	$query="select * from appointments where date='$date' and time='$time' and doctorName='$doc'";
	$r=$this->db->query($query);
	if($r->num_rows()==0){
		
		return TRUE;
	}
	else{ 
	return FALSE;
	}
	}
	function get_fees($appointmentfor)
	{
	$this->load->library('session');
	if(isset($_SESSION['name']))
    {
	$name=$_SESSION['name'];
    $id=$_SESSION['id'];
    }
    else
    {
    echo '<script language="javascript">';
	echo 'alert("Invalid login try again")';
	echo '</script>';
	redirect('/Dental1/homepage', 'refresh');
    //$this->load->view('homepage');
    }
	$query="select price from services where name='$appointmentfor'";
	$r=$this->db->query($query);
	return $r->result_array();
	}

	function show_discount($appointmentfor)
	{
	$this->load->library('session');
	if(isset($_SESSION['name']))
    {
	$name=$_SESSION['name'];
    $id=$_SESSION['id'];
    }
    else
    {
    echo '<script language="javascript">';
	echo 'alert("Invalid login try again")';
	echo '</script>';
	redirect('/Dental1/homepage', 'refresh');
    //$this->load->view('homepage');
    }
	$query="select discount from discounts where servicename='$appointmentfor'";
	$r=$this->db->query($query);
	//var_dump($r->result()[0]->discount);
	return $r->result()[0]->discount;
	}
	function get_appointments()
	{
	$this->load->library('session');
	if(isset($_SESSION['name']))
    {
	$name=$_SESSION['name'];
    $id=$_SESSION['id'];
    }
    else
    {
    echo '<script language="javascript">';
	echo 'alert("Invalid login try again")';
	echo '</script>';
	redirect('/Dental1/homepage', 'refresh');
    //$this->load->view('homepage');
    }
	$query="select * from appointments where userid='$id' order by id desc";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	
	function view_appointment($Bid)
	{
	$q="select * from appointments where id='$Bid'";
	$res=$this->db->query($q);
	//var_dump($res->result()[0]);
	return $res->result();
	}

	function create_notifications($apid,$service,$date,$time,$phone)
	{
	$this->load->library('session');
	
	if(isset($_SESSION['name']))
    {
	$name=$_SESSION['name'];
    $id=$_SESSION['id'];
    }
    else
    {
    echo '<script language="javascript">';
	echo 'alert("Invalid login try again")';
	echo '</script>';
	redirect('/Dental1/homepage', 'refresh');
    //$this->load->view('homepage');
    }
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
	if(isset($_SESSION['name']))
    {
	$name=$_SESSION['name'];
    $id=$_SESSION['id'];
    }
    else
    {
    echo '<script language="javascript">';
	echo 'alert("Invalid login try again")';
	echo '</script>';
	redirect('/Dental1/homepage', 'refresh');
    //$this->load->view('homepage');
    }
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
	if(isset($_SESSION['name']))
    {
	$name=$_SESSION['name'];
    $id=$_SESSION['id'];
    }
    else
    {
    echo '<script language="javascript">';
	echo 'alert("Invalid login try again")';
	echo '</script>';
	redirect('/Dental1/homepage', 'refresh');
    //$this->load->view('homepage');
    }
	$query="select * from notifications where uid='$id' and status='unseen' order by apid desc";
	$r=$this->db->query($query);
	 if($r->num_rows())
                  {
                  	return True;

                  } 
                  else 
                  {
                  	return False;
                   	
                   } 

	}

	function get_seen_notifications()
	{
	$this->load->library('session');
	if(isset($_SESSION['name']))
    {
	$name=$_SESSION['name'];
    $id=$_SESSION['id'];
    }
    else
    {
    echo '<script language="javascript">';
	echo 'alert("Invalid login try again")';
	echo '</script>';
	redirect('/Dental1/homepage', 'refresh');
    //$this->load->view('homepage');
    }
	$query="select * from notifications where uid='$id' and status='seen' order by apid desc";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function pay($Bid)
	{
	$this->load->library('session');
	if(isset($_SESSION['name']))
    {
	$name=$_SESSION['name'];
    $id=$_SESSION['id'];
    }
    else
    {
    echo '<script language="javascript">';
	echo 'alert("Invalid login try again")';
	echo '</script>';
	redirect('/Dental1/homepage', 'refresh');
    //$this->load->view('homepage');
    }
	$query="select price from services where id='$Bid'";
	$r=$this->db->query($query);
	return $r->result_array();
	}
	function pay_fees($Bid)
	{
	$query="update appointments set payment='paid' where id='$Bid'";
	$r=$this->db->query($query);

	}
}
?>