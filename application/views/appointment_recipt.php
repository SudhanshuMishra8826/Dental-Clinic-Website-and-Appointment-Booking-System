<?php
try{
$this->load->library('session');
	//session_start();
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
  //ini_set('session.cache_limiter','public');
  //session_cache_limiter(false);
}
catch(Exception $e)
{
  echo '<script language="javascript">';
	echo 'alert("Invalid login try again")';
	echo '</script>';
  $this->load->view('homepage');
}
?>
 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>desh board</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/dash1.css">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4 class="brand"><span style="font-style: italic; color: red;">Acme</span> Dental Care</h4>
            </div>

            <ul class="list-unstyled components">
                 
                <li class="active">
                    <a href="<?php echo base_url();?>/dental1/dash_home_load/">Home</a>
                     
                </li>
                <li>
                    <a href="<?php echo base_url().'appointment/savedata/';?>">Book Appointments</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>/dental1/history/">History</a>
                     
                </li>
                <li>
                    <a href="#contact">Help</a> 
                </li>
                <li>
                   <a href="<?php echo base_url();?>dental1/homepage/contact">Contact</a>
                </li>
                 
            </ul>


             
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                         
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>dental1/notifications">
                                <div  class="text-secondary" style="padding: 2px 20px 2px; margin-top: 8px; "> 
                                   <i class="fas fa-bell"></i>
                                </div>
                            </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url();?>dental1/logout">Logout</a>
                            </li>
                             
                             
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="board">
            <?php
    foreach($posts as $row)
        {
  echo '<h3> Patient Name : ' .$row->name. '</h3>';
 echo '<h3>Patient Email : '.$row->email. '</h3>';
 echo '<h3>Appointment Date : '.$row->date. '</h3>';
 echo '<h3>Appointment Time : '.$row->time. '</h3>';
  echo '<h3>Service : '.$row->appointmentfor. '</h3>';
  echo '<h3>Fees : '.$row->fees. '</h3>';
   echo '<h3>Status : '.$row->status. '</h3>';
  echo '<h3>Payment: '.$row->payment. '</h3>';
  echo '<h3>Appointment Id : '.$row->id. '</h3>';
  echo '<h3>Account Id : '.$row->userid. '</h3>';
  echo "<td><a href='http://localhost/ci2/dental1/pay_now/". $row->id ."'><button>Pay now</button></a></td>";
  }
?>
  <form action=<?php echo base_url().'dental1/history/';?> method="POST">
<!-- Note that the amount is in paise = 50 INR -->
<!--
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_OeMS2mGVcm5mDl"
    data-amount="500"
    data-buttontext="Pay Now"
    data-name="Merchant Name"
    data-description="Purchase Description"
    data-image="https://your-awesome-site.com/your_logo.jpg"
    data-prefill.name="Gaurav Kumar"
    data-theme.color="#F37254"
></script>-->
<input type="hidden" value="Hidden Element" name="hidden" >
</form>

</div>
            <div class="line"></div>
             
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>