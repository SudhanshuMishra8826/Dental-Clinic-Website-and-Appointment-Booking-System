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
<!-----------link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/dash.css"--------->
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
                   <a class="active" href=#>Home</a></li>
                     
                </li>
                <li>
                   <a href="<?php echo base_url();?>dental1/appointmentsadmin/">All Appointments</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>dental1/appointments_today/">Todays Plan</a>
                     
                </li>

                <li>
                <a href="<?php echo base_url();?>dental1/Discounts/">Discounts</a>
                </li>
                <li>
                   <a href="<?php echo base_url();?>dental1/appointments_requests/">Requests</a>
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
                             
                            <li> 
                              <div  class="text-secondary" style="padding: 7px 20px 2px; margin-top: 0px; "> 
                                <?php echo 'Dr. '.ucfirst($name); ?>&nbsp&nbsp&nbsp
                              </div>
                            </li>
                            <li class="nav-item active">
                              <div  class="text-secondary" style="padding: 7px 20px 2px; margin-top: 0px; "> 
                               <a href="<?php echo base_url();?>dental1/logout">Logout</a> 
                             </div>
                            </li>
                             
                             
                        </ul>
                    </div>
                </div>
            </nav>



<!------------------------------------------------------------------docters details---------------------------------------------------------------->
           <div class="board">
   
   
  <div class="details">
  
  









 






<!----------------------------------------------------------------------calender------------------------------------------------------------------->


  








 
<section class="table-responsive-md">  
<table class="table table-bordered">
  <thead class="">
     <tr class="table-primary">
       <th scope="col" colspan="1" class="text-center text-dark">   <?php echo 'Docter Id = '.$id; ?>  </th>


      <th scope="col" colspan="1" class="text-center text-dark"><?php
      $d=date("Y-m-d");
      echo 'Date : '.$d;
      ?> </th>
       
    </tr>
    
    <tr class="table-primary">
      <th scope="col"  class="text-center">Timing</th>
       <th scope="col"  class="text-center" colspan=6>Appointments</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">10:30-11:00AM</th>
        <td colspan=6> <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='10:30:00')
             {
               echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
             }
            }
  
          } ?>
          </td>
      
   </tr>
    <tr>
      <th scope="row">11:00-11:30AM</th>
      <td colspan=6>
      <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='11:00:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
             }
            }
  
          } ?>
       </td>

    </tr>
    <tr>
      <th scope="row">11:30-12:00AM</th>
      <td colspan=6> <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='11:30:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;

            }
            }
  
          } ?></td>

    </tr>
    <tr>
      <th scope="row">12:00-12:30PM</th>
      <td colspan=6><?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='12:00:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
            }
            }
  
          } ?> </td>

      
    </tr>
    <tr>
      <th scope="row">12:30-01:00PM</th>
      <td colspan=6> 
      <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='12:30:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
            }
            }
  
          } ?>
      </td>

      
    </tr>
    <tr>
      <th scope="row">01:00-01:30PM</th>
      <td colspan=6> <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='01:00:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
            }
            }
  
          } ?>
          </td>

       
    </tr>
    <tr>
      <th scope="row">01:30-02:00PM</th>
      <td colspan=6>
      <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='01:30:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
            }
            }
  
          } ?>
       </td>

      
    </tr>
    <tr>
      <th scope="row">02:00-02:30PM</th>
      <td colspan=6> <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='02:00:00')
             {
               echo $row->time;
             }
            }
  
          } ?></td>


    </tr>
     
     <tr  class="table-danger">
      <th scope="row">02:30-05:30PM</th>
      <td colspan="6" class="text-center">Break</td>
      </tr>

     <tr>
      <th scope="row">05:30-06:00PM</th>
      <td colspan=6> <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='05:30:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
            }
            }
  
          } ?></td>

      
   </tr>
    <tr>
      <th scope="row">06:00-06:30PM</th>
      <td colspan=6><?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='06:00:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
            }
            }
  
          } ?> </td>

    </tr>
    <tr>
      <th scope="row">06:30-07:00PM</th>
      <td colspan=6> 
      <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='06:30:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
            }
            }
  
          } ?>
      </td>

    </tr>
    <tr>
      <th scope="row">07:00-07:30PM</th>
      <td colspan=6> <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='07:00:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
            }
            }
  
          } ?></td>

      
    </tr>
    <tr>
      <th scope="row">07:30-08:00PM</th>
      <td colspan=6> 
      <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='07:30:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
            }
            }
  
          } ?>
      </td>

      
    </tr>
    <tr>
      <th scope="row">08:00-08:30PM</th>
      <td colspan=6> 
      <?php 
        foreach($posts as $r)
          {
            foreach($r as $row){
             if($row->time=='08:00:00')
             {
              echo "Booked for ".$row->appointmentfor.", Appointment Id : ".$row->id;
            }
            }
  
          } ?>
      </td>

       
    </tr>
    
     
  </tbody>
</table>
</section>











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