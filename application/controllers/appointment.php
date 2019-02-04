<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class appointment extends CI_Controller {
	 
		public function savedata()
		{   
			$this->load->database();
			$this->load->library('session');
			//session_start();
			$name=$_SESSION['name'];
			$id=$_SESSION['id'];
			//echo $id;
			//load Model
			$this->load->model('appointment_model');
			//load registration view form
			$this->load->view('appointment');
		
			//Check submit button 
			if($this->input->post('save'))
			{
			//get form's data and store in local varable
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$userid=$id;
			$date=$this->input->post('date');
			$time=$this->input->post('time');
			$service=$this->input->post('appointmentfor');
			
	//call saverecords method of Hello_Model and pass variables as parameter
			$apd=$this->appointment_model->saverecords($name,$email,$userid,$date,$time,$service);
			foreach($apd as $row){
				$apid=$row->id;
			}
			$this->appointment_model->create_notifications($apid,$service,$date,$time);	
			echo '<script language="javascript">';
			echo 'alert("Appointment Requested")';
			echo '</script>';
			}
		}
}