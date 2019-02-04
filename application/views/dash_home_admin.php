<?php

$this->load->library('session');
	//session_start();
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
  ini_set('session.cache_limiter','public');
  session_cache_limiter(false);
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/dash.css">
<head>
</head>
<body>

<ul>
  <li><a class="active" href=#>Home</a></li>
  <li><a href="<?php echo base_url();?>dental1/appointmentsadmin/">All Appointments</a></li>
  <li><a href="<?php echo base_url();?>dental1/appointments_today/">Todays Plan</a></li>
  <li><a href="<?php echo base_url();?>dental1/appointments_requests/">Requests</a></li>
  <li><a href="<?php echo base_url();?>dental1/patients/">All Patients</a></li>
  <li><a href="#contact">Help</a></li>
  <li><a href="<?php echo base_url();?>dental1/homepage/contact">Contact</a></li>
  <li><a href="<?php echo base_url();?>dental1/logout">Logout</a></li>
</ul>

<div class="board">
  <h1><?php echo 'Hello Dr. '.ucfirst($name); ?></h1>
  <h3>We hope you are having a good day.</h3>
  <div class="details">
  <p>Here are your registered details</p>
  <p><?php echo 'Name '.ucfirst($name); ?></p>
  <p><?php echo 'User Id '.$id; ?></p>
</div>
</div>

</body>
</html>