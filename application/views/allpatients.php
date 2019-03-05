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
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/dash.css">
<head>
<script>
window.location.hash=" ";
window.location.hash="  ";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash=" ";}
</script>
<style>
.table{
    margin-top:50px;
    margin-left:30px;
}
th, td {
  padding: 15px;
  text-align: left;
}
tr:hover {background-color: #f5f5f5;}
th {
  background-color: Blue;
  color: white;
}
td {
  background-color: white;
}

</style>
</head>
<body>

<ul>
  <li><a class="active" href="<?php echo base_url();?>dental1/homepage/dash_home_admin">Home</a></li>
  <li><a href="<?php echo base_url();?>dental1/appointmentsadmin/">All Appointments</a></li>
  <li><a href="<?php echo base_url();?>dental1/appointments_today/">Todays Plan</a></li>
  <li><a href="<?php echo base_url();?>dental1/appointments_requests/">Requests</a></li>
  <li><a href="#">All Patients</a></li>
  <li><a href="#contact">Help</a></li>
  <li><a href="<?php echo base_url();?>dental1/homepage/contact">Contact</a></li>
  <li><a href="<?php echo base_url();?>dental1/logout">Logout</a></li>
</ul>

<div class="board">
<div class="table">
  <?php
  echo "<table border='1'>
  <tr>
  <th>BookingId</th>
  <th>Name</th>
  <th>email</th>
  <th>Occupation</th>
  <th>address</th>
  <th>Gender</th>
  <th>Contact No</th>
  </tr>";

  foreach($posts as $row)
  {
  echo "<tr>";
  echo "<td>" . $row->id . "</td>";
  echo "<td>" . $row->uname . "</td>";
  echo "<td>" . $row->email . "</td>";
  echo "<td>" . $row->occupation . "</td>";
  echo "<td>" . $row->address . "</td>";
  echo "<td>" . $row->sex . "</td>";
  echo "<td>" . $row->contact1 . "</td>";

  echo "</tr>";
  }
  echo "</table>";
  ?>
  </div>
</div>
</div>

</body>
</html>