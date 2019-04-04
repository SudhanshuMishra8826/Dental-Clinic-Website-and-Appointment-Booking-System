<?php
 

class Admin extends CI_Controller {

	 
	public function index()
	{
		 
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('uname','User Name','required|alpha');
		 $this->form_validation->set_rules('email','Email','required|valid_email');
		 $this->form_validation->set_rules('pass1','Password','trim|required|matches[pass2]');
     $this->form_validation->set_rules('pass2','Password Confirmation', 'trim|required');
     $this->form_validation->set_rules('occupation','Occupation', 'required|alpha');
     $this->form_validation->set_rules('address','Address', 'trim|required');
     $this->form_validation->set_rules('sex','Sex', 'required');
     $this->form_validation->set_rules('dob','DOB', 'required');
     $this->form_validation->set_rules('contact1','Contact','required|min_length[10]|max_length[12]|integer');
		 $this->form_validation->set_rules('contact2','Alternate Contact','min_length[10]|max_length[12]|integer');
		 
		 $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


		 if($this->form_validation->run())
		 {
		 	$uname=$this->input->post('uname');
		 	$email=$this->input->post('email');
		 	$pass1=$this->input->post('pass1');
		 	$pass=md5($pass1);
		 	$occupation=$this->input->post('occupation');
		 	$address=$this->input->post('address');
		 	$sex=$this->input->post('sex');
		 	$dob=$this->input->post('dob');
		 	$contact1=$this->input->post('contact1');
		 	$contact2=$this->input->post('contact2');

		 	 $this->load->model('signup_model');
		 	  if($this->signup_model->isvalidate($uname,$email))
		 	 {

             echo "user with this username and email id is already registered";

		 	 }
		 	 else
		 	     {
		 	 	  if($this->signup_model->insert($uname,$email,$pass,$occupation,$address,$sex,$dob,$contact1,$contact2))
		 	     {
		 	     	$this->load->view('login');
		 	       //echo "data insert successfull";
		         }
		         else
		         {
		     	   echo "Signup failed";
		         }
 
		 	 }
		 	 

		  }
		 else{
		 	$this->load->view('signup');
		 	//echo validation_errors();

		 }



	 
	}
		
}
?>