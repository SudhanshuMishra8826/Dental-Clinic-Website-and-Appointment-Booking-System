<?php 
class admin_model extends CI_Model 
{
	function get_patient()
	{
	$query="select * from patient";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
    }
    function get_appointments_admin()
	{
	$query="select * from appointments";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function get_appointments_requests()
	{
	$query="select * from appointments where status='requested'";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function approve_appointments()
	{
	$q="select id,userid,date,time,appointmentfor from appointments where status='requested'";
	$res=$this->db->query($q);
	$query="update appointments set status='approved' where status='requested'";
	$r=$this->db->query($query);
	$rows=$res->result();
	foreach($rows as $row){
		$query="insert into notifications values('$row->userid','$row->id','','Your appointment for $row->appointmentfor at $row->date , $row->time is approved','unseen')";
		$this->db->query($query);
	}
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function dissapprove_appointments()
	{
		
	$q="select id,userid,date,time,appointmentfor from appointments where status='requested'";
	$res=$this->db->query($q);
	$query="update appointments set status='Rescheduled' where status='requested'";
	$r=$this->db->query($query);
	$rows=$res->result();
	foreach($rows as $row){
		$query="insert into notifications values('$row->userid','$row->id','','Your appointment for $row->appointmentfor at $row->date , $row->time is rescheduled. Please book again.','unseen')";
		$this->db->query($query);
	}
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function dissapprove_appointment($Bid)
	{
		
	$q="select id,userid,date,time,appointmentfor from appointments where status='requested' and id='$Bid'";
	$res=$this->db->query($q);
	$query="update appointments set status='Rescheduled' where id='$Bid'";
	$r=$this->db->query($query);
	$rows=$res->result();
	foreach($rows as $row){
		$query="insert into notifications values('$row->userid','$row->id','','Your appointment for $row->appointmentfor at $row->date , $row->time is rescheduled. Please book again.','unseen')";
		$this->db->query($query);
	}
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function approve_appointment($Bid)
	{
	$q="select id,userid,date,time,appointmentfor from appointments where status='requested' and id='$Bid'";
	$res=$this->db->query($q);
	$query="update appointments set status='approved' where id='$Bid'";
	$r=$this->db->query($query);
	$rows=$res->result();
	foreach($rows as $row){
		$query="insert into notifications values('$row->userid','$row->id','','Your appointment for $row->appointmentfor at $row->date , $row->time is approved.','unseen')";
		$this->db->query($query);
	}
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
	function get_appointments_today()
	{$d=date("Y-m-d");
	$query="select * from appointments where date='$d'";
	$r=$this->db->query($query);
	return $r->result();
	//$data['r']=$r;
	//$this->load->view('allappointments',$r);
	
	}
}
?>