<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."libraries/lib/config_paytm.php");
require_once(APPPATH."libraries/lib/encdec_paytm.php");

class Dental1 extends CI_Controller {

	public function homepage($page="homepage")
	{
		//$this->load->view('homepage1');
		//$this->load->view('contact');
		if($page=='dash_home_admin'){
			$this->data['posts']=$this->appointments_todayCal();
			$this->load->view('dash_home_admin',$this->data);

		}
		else{
		$this->load->view(''.$page);}

		//$this->load->view('home');
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

public function Discounts()
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->get_discounts();
	$this->load->view('discount',$this->data);
}
public function Update_Discount()
 {
	//$this->load->view('index');
	$this->load->database();
	$this->load->library('session');
			//session_start();
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
	//echo $id;
	//load Model
	$this->load->model('Admin_model');
			//load registration view form
	$this->load->view("discountUpdate");	
			//Check submit button 
	if($this->input->post('save'))
		{
			//get form's data and store in local varable
			$Root_Canal=$this->input->post('root');
			$Tooth_Extractions=$this->input->post('Extractions');
			$Cleaning=$this->input->post('Cleaning');
			$Dental_Implants=$this->input->post('Implants');
	//call saverecords method of Hello_Model and pass variables as parameter
			$apd=$this->Admin_model->saverecords($Root_Canal,$Tooth_Extractions,$Cleaning,$Dental_Implants);
		}
}

public function Update_Discount_Individual($idAp)
 {
	//$this->load->view('index');
	$this->load->database();
	$this->load->library('session');
			//session_start();
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
	//echo $id;
	//load Model
	$this->load->model('Admin_model');
			//load registration view form
	$this->load->view("discountUpdateIndividual");	
			//Check submit button 
	if($this->input->post('save'))
		{
			//get form's data and store in local varable
			$discount=$this->input->post('discount');
	//call saverecords method of Hello_Model and pass variables as parameter
			$apd=$this->Admin_model->UpdateIndivDiscount($discount,$idAp);
		}
}
public function appointmentsadmin()
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->get_appointments_admin($_SESSION["name"]);
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
	$this->data['posts']=$this->admin_model->get_appointments_requests($_SESSION["name"]);
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
	$this->data['posts']=$this->admin_model->get_appointments_today($_SESSION["name"]);
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
public function confirm_this($Bid)
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('admin_model');
	$this->data['posts']=$this->admin_model->confirm_appointment($Bid);
	$this->load->view('dash_home_admin');
	//unset($_SESSION["name"]);
	//unset($_SESSION["id"]);
	//$this->load->view(''.$page);
	//$this->load->view('home');
}
public function PaytmGateway($Bid)
    {
        $orderId = $Bid; /// must be unique
      $this->StartPayment($orderId);
	}
public function StartPayment($orderId)
    {
        $paramList["MID"] = PAYTM_MERCHANT_MID;
        $paramList["ORDER_ID"] = $orderId;     
        $paramList["CUST_ID"] = $orderId;   /// according to your logic
        $paramList["INDUSTRY_TYPE_ID"] = 'RETIAL';
        $paramList["CHANNEL_ID"] = 'WEB';
        $paramList["TXN_AMOUNT"] = 50;
        $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
   
        $paramList["CALLBACK_URL"] = "http://localhost/ci2/dental1/PaytmResponse/".$orderId;
        $paramList["MSISDN"] = '77777777'; //Mobile number of customer
        $paramList["EMAIL"] ='foo@gmail.com';
        $paramList["VERIFIED_BY"] = "EMAIL"; //
        $paramList["IS_USER_VERIFIED"] = "YES"; //
        //print_r($paramList);
		$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
        ?>

        <!--submit form to payment gateway OR in api environment you can pass this form data-->
   
        <form id="myForm" action="<?php echo PAYTM_TXN_URL ?>" method="post">
        <?php
         foreach ($paramList as $a => $b) {
        echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
       }
       ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
        </form>
        <script type="text/javascript">
            document.getElementById('myForm').submit();
         </script>
 
		<?php
	}
	public function PaytmResponse($Bid)
    {
        $paytmChecksum = "";
        $paramList = array();
        $isValidChecksum = "FALSE";

        $paramList = $_POST;
        //echo "<pre>";
		//print_r($paramList);
		//$this->pay_now($Bid);
   
	  $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg
		$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.
        if($isValidChecksum == "TRUE")
        {
            if ($_POST["STATUS"] == "TXN_SUCCESS")
            { /// put your to save into the database // tansaction successfull
				var_dump($paramList);
				$this->pay_now($Bid);

            }
            else {/// failed
                var_dump($paramList);
            }
        }else
		{//////////////suspicious
			echo "False";
           // put your code here
       
        }
    }
public function pay_now($Bid)
 {
	//$this->load->view('index');
	$this->load->library('session');
	$this->load->model('appointment_model');
	$this->data['posts']=$this->appointment_model->pay_fees($Bid);
	$this->data['posts']=$this->appointment_model->view_appointment($Bid);
	$this->load->view('appointment_recipt',$this->data);
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
	$discount=$this->appointment_model->show_discount($this->data['posts'][0]->appointmentfor);
	$this->session->set_flashdata('discount',$discount);
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
	