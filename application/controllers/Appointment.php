<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class appointment extends CI_Controller {
	 
		public function savedata()
		{
			$this->load->database();
			$this->load->library('session');
			//session_start();
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
			//load Model
			$this->load->model('Appointment_model');

            

            //check notification 
            if($this->Appointment_model->check_notifications()){
        //$this->load->view('dash_home_2');

       $data['bool']=1;
         
     }
     else{
     	 $data['bool']=2;
     }
     //$data['check_posts']=$this->appointment_model->check_notifications();
     $this->load->view('appointment', $data);







			//load registration view form
			//$this->load->view('appointment');
		
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
			$phone=$this->input->post('phone');
			$doc=$this->input->post('doc');
			$feesrow=$this->Appointment_model->get_fees($service);
			//foreach($feesrow as $ro){
			//	$fees=$ro->id;
			//}
			$fees=$feesrow[0]['price'];
	//call saverecords method of Hello_Model and pass variables as parameter
			$bool=$this->Appointment_model->checkAvailability($date,$time,$doc);
			if($bool==TRUE){
			$apd=$this->Appointment_model->saverecords($name,$email,$userid,$date,$time,$service,$phone,$doc,$fees);
			foreach($apd as $row){
				$apid=$row->id;
			}
			$this->Appointment_model->create_notifications($apid,$service,$date,$time,$phone);	
			$this->session->set_flashdata('apid',$apid);
			redirect('dental1/viewappointment/'.$apid);
				}
			else{
				echo "<script type='text/javascript'>alert('This slot is booked try another one');</script>";
				#redirect('Appointment/savedata');
	
			}
		}
		}










 
  
      
      
 
}