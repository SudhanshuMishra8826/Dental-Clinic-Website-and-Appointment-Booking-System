<?php

$this->load->library('session');
	//session_start();
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
  //ini_set('session.cache_limiter','public');
  //session_cache_limiter(false);
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





<script>
window.location.hash=" ";
window.location.hash="  ";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash=" ";}
</script>
 
</head>
<body>

<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4 class="brand"><span style="font-style: italic; color: red;">Acme</span> Dental Care</h4>
            </div>

            <ul class="list-unstyled components">
                 
                <li >
                   <a   href="<?php echo base_url();?>dental1/homepage/dash_home_admin">Home</a></li>
                     
                </li>
                <li class="active">
                   <a class="active" href="<?php echo base_url();?>dental1/appointmentsadmin/">All Appointments</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>dental1/appointments_today/">Todays Plan</a>
                     
                </li>
                <li>
                   <a href="<?php echo base_url();?>dental1/appointments_requests/">Requests</a>
                </li>
                <li>
                <a href="<?php echo base_url();?>dental1/Discounts/">Discounts</a>
                </li>
                <li>
                   <a href="<?php echo base_url();?>dental1/patients/">All Patients</a>
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
                          
                            <li class="nav-item active">
                               <a href="<?php echo base_url();?>dental1/logout">Logout</a> 
                            </li>
                             
                             
                        </ul>
                    </div>
                </div>
            </nav>
             <div class="table-responsive-md">
            <?php
  echo "<table class='table table-hover'>
  
  <thead class='bg-info text-white'>
    <tr>
     <th>BookingId</th>
  <th>Name</th>
  <th>email</th>
  <th>User Id</th>
  <th>Date</th>
  <th>Time</th>
  <th>Service</th>
  <th>Status</th>
  <th>Approve</th>
  <th>Confirm</th>


  <th>Reschedule</th>
    </tr>
  </thead>";
  foreach($posts as $row)
  {
  echo"<tbody>";
  echo "<tr>";
  echo "<td>" . $row->id . "</td>";
  echo "<td>" . $row->name . "</td>";
  echo "<td>" . $row->email . "</td>";
  echo "<td>" . $row->userid . "</td>";
  echo "<td>" . $row->date . "</td>";
  echo "<td>" . $row->time . "</td>";
  echo "<td>" . $row->appointmentfor . "</td>";
  echo "<td>" . $row->status . "</td>";
  echo "<td><a href='http://localhost/ci2/dental1/approve_this/". $row->id ."'><button  type='button' class='btn btn-info'>Approve</button></a></td>";
  echo "<td><a href='http://localhost/ci2/dental1/confirm_this/". $row->id ."'><button  type='button' class='btn btn-info'>Confirm</button></a></td>";
  echo "<td><a href='http://localhost/ci2/dental1/dissapprove/". $row->id ."'><button  type='button' class='btn btn-info'>Reschedule</button></a></td>";

  echo "</tr>";
  echo "</tbody>";
  }
  echo "</table>";
  ?>
</div>








 
  <div class='nr text-center'>
  <a href="<?php echo base_url();?>dental1/appointments_approve/"><button  type='button' class='btn btn-danger'>Approve All</button></a></div>
  <br/>
  <div class='nr text-center'>
  <a href="<?php echo base_url();?>dental1/appointments_reschedule/"><button  type='button' class='btn btn-danger'>Reschedule All</button></a></div>

 
</div>

</body>
</html>