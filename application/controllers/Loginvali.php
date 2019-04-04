<?php
class Loginvali extends CI_Controller {

	 
	public function index()
	{
		$this->load->library('session');	 

		 $this->load->library('form_validation');
		 //$this->form_validation->set_rules('uname','User Name','required|alpha');
		 $this->form_validation->set_rules('email','Email','required|valid_email');
		  
		 $this->form_validation->set_rules('pass1','Password','trim|required');
          
         
		 $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


		 if($this->form_validation->run())
		 {
		 	$email=$this->input->post('email');
		 	$pass1=$this->input->post('pass1');
		 	$pass=md5($pass1);
		 	
			$this->load->model('Loginmodel');
			$q=$this->db->where(['email'=>$email,'password'=>$pass])->get('patient');
			foreach ($q->result() as $row)
			{
		        $_SESSION['name']=$row->uname;
        		$_SESSION['id']=$row->id;
        		#$data['email']= $row->email;
			}
                if($q->num_rows())
                {
					//echo "details matched";
					
     				$this->load->model('Appointment_model');
     				if($this->Appointment_model->check_notifications()){
        			//$this->load->view('dash_home_2');
						$data['bool']=1;
         						}
     				else{
     	 				$data['bool']=2;
     								}
     //$data['check_posts']=$this->appointment_model->check_notifications();
     					$this->load->view('dash_home', $data);
                		} 
             	   	else 
                	{
						echo "detailes not matched";
                   	
                	} 
		 	 /*if($this->loginmodel->isvalidate($email,$pass))
		 	 {

             echo "details matched";

		 	 }
		 	 el
		 	 {
		 	 	echo "detailes not matched";
 
		 	 }*/
		 	 
		 }
		 else{
		 	$this->load->view('login');
		 	//echo validation_errors();
		 }
	 }
	 public function appointments_todayCal()
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->get_appointments_today($_SESSION["name"]);
	return $this->data;
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
}
	 public function indexadmin()
	{
		$this->load->library('session');	 

		 $this->load->library('form_validation');
		 //$this->form_validation->set_rules('uname','User Name','required|alpha');
		 $this->form_validation->set_rules('email','Email','required|valid_email');
		  
		 $this->form_validation->set_rules('pass1','Password','trim|required');
          
         
		 $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


		 if($this->form_validation->run())
		 {
		 	$email=$this->input->post('email');
		 	$pass1=$this->input->post('pass1');
		 	$pass=md5($pass1);
		 	
			$this->load->model('Loginmodel');
			$q=$this->db->where(['doc_email'=>$email,'doc_password'=>$pass])->get('doctors');
			foreach ($q->result() as $row)
			{
		        $_SESSION['name']=$row->doc_name;
				$_SESSION['id']=$row->doc_id;
				$this->data['posts']=$this->appointments_todayCal();
        		#$data['email']= $row->email;
			}
                if($q->num_rows())
                {
					//echo "details matched";
					//var_dump($this->data);
					$this->load->view('dash_home_admin',$this->data);
                } 
                else 
                {
					echo "detailes not matched";
                   	
                } 
		 	 /*if($this->loginmodel->isvalidate($email,$pass))
		 	 {

             echo "details matched";

		 	 }
		 	 el
		 	 {
		 	 	echo "detailes not matched";
 
		 	 }*/
		 	 
		 }
		 else{
		 	$this->load->view('login');
		 	//echo validation_errors();
		 }
     }
 }