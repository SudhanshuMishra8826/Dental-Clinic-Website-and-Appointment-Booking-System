<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dental1 extends CI_Controller {

	 
	public function homepage($page="homepage")
	{
		//$this->load->view('homepage1');
		//$this->load->view('contact');
		 $this->load->view(''.$page);
		//$this->load->view('home');


 }
 public function logout($page="homepage")
	{
		//$this->load->view('index');
		$this->load->library('session');
		//$this->load->view('contact');
		unset($_SESSION["name"]);
		unset($_SESSION["id"]);
		$this->load->view(''.$page);
		//$this->load->view('home');
		
 } 
 
 public function recipt()
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('appointment_model');
	$apid = $this->session->flashdata('apid');
	$this->data['posts']=$this->appointment_model->view_appointment($apid);
	$this->load->view('appointment_recipt',$this->data);
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
	 


}
 public function history()
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('appointment_model');
	$this->data['posts']=$this->appointment_model->get_appointments();
	$this->load->view('allappointments',$this->data);
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
	 


}
public function notifications()
{
   //$this->load->view('index');
   $this->load->library('session');
   $this->load->model('appointment_model');
   $this->data['posts']=$this->appointment_model->get_notifications();
   $this->load->view('userNotification',$this->data);
   //unset($_SESSION["name"]);
   //unset($_SESSION["id"]);
   //$this->load->view(''.$page);
   //$this->load->view('home');
	


}




//public function index()
//{
   //$this->load->view('index');
  // $this->load->library('session');
  // $this->load->model('appointment_model');
//$data['check_posts']=$this->appointment_model->check_notifications();
 //  $this->load->view('dash_home', $data);
   //unset($_SESSION["name"]);
   //unset($_SESSION["id"]);
   //$this->load->view(''.$page);
   //$this->load->view('home');
	


//}










public function seenNotifications()
{
   //$this->load->view('index');
   $this->load->library('session');
   $this->load->model('appointment_model');
   $this->data['posts']=$this->appointment_model->get_seen_notifications();
   $this->load->view('userNotification',$this->data);
   //unset($_SESSION["name"]);
   //unset($_SESSION["id"]);
   //$this->load->view(''.$page);
   //$this->load->view('home');
	


}
public function patients()
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->get_patient();
	$this->load->view('allpatients',$this->data);
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
}
public function appointmentsadmin()
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->get_appointments_admin();
	$this->load->view('allappointmentsadmin',$this->data);
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
}
public function appointments_requests()
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->get_appointments_requests();
	$this->load->view('allrequestedappointmentsadmin',$this->data);
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
}
public function appointments_today()
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->get_appointments_today();
	$this->load->view('allappointmentsadmin',$this->data);
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
}
public function appointments_approve()
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->approve_appointments();
	$this->load->view('dash_home_admin');
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
}
public function appointments_reschedule()
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->dissapprove_appointments();
	$this->load->view('dash_home_admin');
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
}
public function approve_this($Bid)
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->approve_appointment($Bid);
	$this->load->view('dash_home_admin');
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
}
public function viewappointment($Bid)
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('appointment_model');
	$this->data['posts']=$this->appointment_model->view_appointment($Bid);
	$this->load->view('appointment_recipt',$this->data);
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
}
public function dissapprove($Bid)
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->dissapprove_appointment($Bid);
	$this->load->view('dash_home_admin');
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
}
 public function dash_home_load()
 {
	 //$this->load->view('index');
	 //$this->load->view('contact');
	 //$this->load->view('dash_home');
	 //$this->load->view('home');
     $this->load->library('session');
     $this->load->model('appointment_model');
     if($this->appointment_model->check_notifications()){
        //$this->load->view('dash_home_2');

       $data['bool']=1;
         
     }
     else{
     	 $data['bool']=2;
     }
     //$data['check_posts']=$this->appointment_model->check_notifications();
     $this->load->view('dash_home', $data);

}
public function appointment()
{
	//$this->load->view('index');
	//$this->load->view('contact');
	$this->load->view('appointment');
	//$this->load->view('home');


}
}
	