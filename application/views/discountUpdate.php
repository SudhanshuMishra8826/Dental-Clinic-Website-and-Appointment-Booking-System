<?php

$this->load->library('session');
	//session_start();
	$name=$_SESSION['name'];
	$id=$_SESSION['id'];
  ///ini_set('session.cache_limiter','public');
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
  padding: 10px;
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
  <li><a href="<?php echo base_url();?>dental1/patients/">All patients</a></li>
  <li><a href="<?php echo base_url();?>dental1/Discounts/">Discounts</a></li>

  <li><a href="#contact">Help</a></li>
  <li><a href="<?php echo base_url();?>dental1/homepage/contact">Contact</a></li>
  <li><a href="<?php echo base_url();?>dental1/logout">Logout</a></li>
</ul>

                        <form method="post">
                            <!-- Form start -->
                            <div class="board">

                                        <label class="control-label" for="name">Root canal</label>
                                        <input id="root" name="root" type="text" placeholder="Enter Discount " class="form-control input-md" required>                                      
                                        <label class="control-label" for="name">Tooth Extractions</label>
                                        <input id="Extractions" name="Extractions" type="text" placeholder="Enter Discount " class="form-control input-md" required>           

                                        <label class="control-label" for="name">Cleaning</label>
                                        <input id="Cleaning" name="Cleaning" type="text" placeholder="Enter Discount " class="form-control input-md" required>           

                                        <label class="control-label" for="name">Dental Implants</label>
                                        <input id="Implants" name="Implants" type="text" placeholder="Enter Discount " class="form-control input-md" required>         
                                    <input type="submit" name="save" class="btn btn-info" />
                                    </div>
                        </form>
                        <!-- form end -->
                      

                        </body>
</html>