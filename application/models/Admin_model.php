<?php 
class admin_model extends CI_Model 
{
	function approve_notifications($phone,$service,$date,$time,$email){
		$curl = curl_init();

		curl_setopt_array($curl, array(
	  	CURLOPT_URL => "http://api.msg91.com/api/v2/sendsms?campaign=&response=&afterminutes=&schtime=&unicode=&flash=&message=&encrypt=&authkey=&mobiles=&route=&sender=&country=91",
	  	CURLOPT_RETURNTRANSFER => true,
	  	CURLOPT_ENCODING => "",
	  	CURLOPT_MAXREDIRS => 10,
	  	CURLOPT_TIMEOUT => 30,
	  	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  	CURLOPT_CUSTOMREQUEST => "POST",
	  	CURLOPT_POSTFIELDS => "{ \"sender\": \"SOCKET\", \"route\": \"4\", \"country\": \"91\", \"sms\": [ { \"message\": \"Your request for an appointment for $service at $date , $time at ACME Dental Care is approved. You can proceed to payment and ignore if already paid.\", \"to\": [ $phone] }] }",
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
		
		$this->load->library('email'); 
    $this->email->from('sm.22.1.1999@gmail.com', 'Acme Dental Lounge'); 
    $this->email->to($email);
		$this->email->subject('Appointment Approved'); 
		$m="Your request for an appointment for $service at $date , $time at ACME Dental Care is approved. You can proceed to payment and ignore if already paid.";
    $this->email->message($m); 
		$this->email->send();	
	}
		function confirm_notifications($phone,$service,$date,$time,$email){
			$curl = curl_init();
	
			curl_setopt_array($curl, array(
				CURLOPT_URL => "http://api.msg91.com/api/v2/sendsms?campaign=&response=&afterminutes=&schtime=&unicode=&flash=&message=&encrypt=&authkey=&mobiles=&route=&sender=&country=91",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => "{ \"sender\": \"SOCKET\", \"route\": \"4\", \"country\": \"91\", \"sms\": [ { \"message\": \"Your request for an appointment for $service at $date , $time at ACME Dental Care is confirmed.\", \"to\": [ $phone] }] }",
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
		$this->load->library('email'); 
		$this->email->from('sm.22.1.1999@gmail.com', 'Acme Dental Lounge'); 
    $this->email->to($email);
		$this->email->subject('Appointment Confirmed'); 
		$m="Your request for an appointment for $service at $date , $time at ACME Dental Care is Confirmed. You can proceed to payment and ignore if already paid.";
    $this->email->message($m); 
		$this->email->send();
			}

		function dissapprove_notifications($phone,$service,$date,$time,$email){
			$curl = curl_init();
	
			curl_setopt_array($curl, array(
			  CURLOPT_URL => "http://api.msg91.com/api/v2/sendsms?campaign=&response=&afterminutes=&schtime=&unicode=&flash=&message=&encrypt=&authkey=&mobiles=&route=&sender=&country=91",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => "{ \"sender\": \"SOCKET\", \"route\": \"4\", \"country\": \"91\", \"sms\": [ { \"message\": \"Your request for an appointment for $service at $date , $time at ACME Dental Care is not approved, Please Book again.\", \"to\": [ $phone] }] }",
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

		$this->load->library('email'); 
    $this->email->from('sm.22.1.1999@gmail.com', 'Acme Dental Lounge'); 
    $this->email->to($email);
		$this->email->subject('Appointment Rescheduled'); 
		$m="Your request for an appointment for $service at $date , $time at ACME Dental Care is rescehduled Please book again.";
    $this->email->message($m); 
		$this->email->send();	
			}
	function get_patient()
	{
	$query="select * from patient";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
		}
		function saverecords($Root_Canal,$Tooth_Extractions,$Cleaning,$Dental_Implant)
	{
	$this->db->trans_start();
	$query="update discounts set discount=$Root_Canal WHERE servicename='Root Canal'";
	$this->db->query($query);

	//$query2="update discounts set discount=$Tooth_Extractions WHERE servicename='Tooth Extractions'";
	$this->db->query("update discounts set discount=$Tooth_Extractions WHERE servicename='Tooth Extractions'");

	//$query3="update discounts set discount=$Cleaning WHERE servicename='Cleaning'";
	$this->db->query("update discounts set discount=$Cleaning WHERE servicename='Cleaning'");

	//$query4="update discounts set discount=$Dental_Implants WHERE servicename='Dental Implants'";
	$this->db->query("update discounts set discount=$Dental_Implant WHERE servicename='Dental Implants'");
	$this->db->trans_complete(); 
	echo '<script>alert("Discounts Updated!");</script>';

	}
	function UpdateIndivDiscount($discount,$id)
	{
	$query="update appointments set discountap=$discount WHERE id=$id";
	$r=$this->db->query($query);
	echo '<script>alert("Discounts Updated!");</script>';
		//var_dump($r);
	}
		function get_discounts()
	{
	$query="select * from discounts";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
    }
    function get_appointments_admin($doc)
	{
	$d="Dr. ".$doc;
	$query="select * from appointments where doctorName='$d' order by id desc";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function get_appointments_requests($doc)
	{
	$d="Dr. ".$doc;
	$query="select * from appointments where status='requested' and doctorName='$d' order by id desc";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function approve_appointments()
	{
	$q="select id,userid,date,time,appointmentfor,phone,email from appointments where status='requested'";
	$res=$this->db->query($q);
	$query="update appointments set status='approved' where status='requested'";
	$r=$this->db->query($query);
	$rows=$res->result();
	foreach($rows as $row){
		$query="insert into notifications values('$row->userid','$row->id','','Your appointment for $row->appointmentfor at $row->date , $row->time is approved. You can proceed for payment now or ignore if already paid','unseen')";
		$this->db->query($query);
		$this->approve_notifications($row->phone,$row->appointmentfor,$row->date,$row->time,$row->email);
	}
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function dissapprove_appointments()
	{
		
	$q="select id,userid,date,time,appointmentfor,phone,email from appointments where status='requested'";
	$res=$this->db->query($q);
	$query="update appointments set status='Rescheduled' where status='requested'";
	$r=$this->db->query($query);
	$rows=$res->result();
	foreach($rows as $row){
		$query="insert into notifications values('$row->userid','$row->id','','Your appointment for $row->appointmentfor at $row->date , $row->time is rescheduled. Please book again.','unseen')";
		$this->db->query($query);
		$this->dissapprove_notifications($row->phone,$row->appointmentfor,$row->date,$row->time,$row->email);

	}
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function dissapprove_appointment($Bid)
	{
		
	$q="select id,userid,date,time,appointmentfor,phone,email from appointments where id='$Bid'";
	$res=$this->db->query($q);
	$query="update appointments set status='Rescheduled' where id='$Bid'";
	$r=$this->db->query($query);
	$rows=$res->result();
	foreach($rows as $row){
		$query="insert into notifications values('$row->userid','$row->id','','Your appointment for $row->appointmentfor at $row->date , $row->time is rescheduled. Please book again.','unseen')";
		$this->db->query($query);
		$this->dissapprove_notifications($row->phone,$row->appointmentfor,$row->date,$row->time,$row->email);
	}
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function approve_appointment($Bid)
	{
	$q="select id,userid,date,time,appointmentfor,phone,email from appointments where status='requested' and id='$Bid'";
	$res=$this->db->query($q);
	$query="update appointments set status='approved' where id='$Bid'";
	$r=$this->db->query($query);
	$rows=$res->result();
	foreach($rows as $row){
		$query="insert into notifications values('$row->userid','$row->id','','Your appointment for $row->appointmentfor at $row->date , $row->time is approved.','unseen')";
		$this->db->query($query);
		$this->approve_notifications($row->phone,$row->appointmentfor,$row->date,$row->time,$row->email);

	}
}
	function confirm_appointment($Bid)
	{
	$q="select id,userid,date,time,appointmentfor,phone,email from appointments where id='$Bid'";
	$res=$this->db->query($q);
	$query="update appointments set status='Confirmed' where id='$Bid'";
	$r=$this->db->query($query);
	$rows=$res->result();
	foreach($rows as $row){
		$query="insert into notifications values('$row->userid','$row->id','','Your appointment for $row->appointmentfor at $row->date , $row->time is confirmed.','unseen')";
		$this->db->query($query);
		$this->confirm_notifications($row->phone,$row->appointmentfor,$row->date,$row->time,$row->email);

	}
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function get_appointments_today($doc)
	{$d=date("Y-m-d");
		$do="Dr. ".$doc;
	$query="select * from appointments where date='$d'and doctorName='$do' order by id desc";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
}
?>