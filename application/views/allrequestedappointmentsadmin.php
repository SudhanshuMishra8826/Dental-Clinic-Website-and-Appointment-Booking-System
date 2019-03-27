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
    margin-top:10px;
    margin-left:10px;
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
.nr{
    margin-top: 40px;
    text-align: center;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="<?php echo base_url();?>dental1/homepage/dash_home_admin">Home</a></li>
  <li><a href="<?php echo base_url();?>dental1/appointmentsadmin/">All Appointments</a></li>
  
  <li><a href="<?php echo base_url();?>dental1/appointments_today/">Todays Plan</a></li>
  <li><a href="<?php echo base_url();?>dental1/appointments_requests/">Requests</a></li>
  <li><a href="<?php echo base_url();?>dental1/patients/">All patients</a></li>
  <li><a href="<?php echo base_url();?>dental1/Discounts/">Discounts</a></li>

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
  <th>User Id</th>
  <th>Date</th>
  <th>Time</th>
  <th>Service</th>
  <th>Status</th>
  <th>Approve</th>
  <th>Confirm</th>


  <th>Reschedule</th>


  </tr>";

  foreach($posts as $row)
  {
  echo "<tr>";
  echo "<td>" . $row->id . "</td>";
  echo "<td>" . $row->name . "</td>";
  echo "<td>" . $row->email . "</td>";
  echo "<td>" . $row->userid . "</td>";
  echo "<td>" . $row->date . "</td>";
  echo "<td>" . $row->time . "</td>";
  echo "<td>" . $row->appointmentfor . "</td>";
  echo "<td>" . $row->status . "</td>";
  echo "<td><a href='http://localhost/ci2/dental1/approve_this/". $row->id ."'><button>Approve</button></a></td>";
  echo "<td><a href='http://localhost/ci2/dental1/confirm_this/". $row->id ."'><button>Confirm</button></a></td>";
  echo "<td><a href='http://localhost/ci2/dental1/dissapprove/". $row->id ."'><button>Reschedule</button></a></td>";

  echo "</tr>";
  }
  echo "</table>";
  ?>
  
  </div>
  <div class='nr'>
  <a href="<?php echo base_url();?>dental1/appointments_approve/"><button>Approve All</button></a></div>
  <div class='nr'>
  <a href="<?php echo base_url();?>dental1/appointments_reschedule/"><button>Reschedule All</button></a></div>

</div>
</div>

</body>
</html>