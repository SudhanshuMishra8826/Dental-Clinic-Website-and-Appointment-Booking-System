<?php
 

class Contact extends CI_Controller {

	 
	public function save()
	{
		 
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('uname','User Name','required|alpha');
		 $this->form_validation->set_rules('email','Email','required|valid_email');
		 $this->form_validation->set_rules('contact','Contact','required|min_length[10]|max_length[12]|integer');
          $this->form_validation->set_rules('subject','Subject', 'trim|required');
          
          $this->form_validation->set_rules('message','Message','required');
         



		 $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


		 if($this->form_validation->run())
		 {
		 	$uname=$this->input->post('uname');
		 	$email=$this->input->post('email');
		 	$contact=$this->input->post('contact');
		 	$subject=$this->input->post('subject');
		 	$message=$this->input->post('message');
		 	 
		 	  
		 	  $this->load->model('contact_model');
		     if($this->contact_model->insert($uname,$email,$contact,$subject,$message))
		 	     {
		 	     	 
		 	        echo "data insert successfull";
		         }
		         else
		         {
		     	   echo "can't connect";
		         }
 
		 	 }
		 	 

		  
		 else{
		 	$this->load->view('contact');
		 	//echo validation_errors();

		 }



	 
	}
		
}
?>