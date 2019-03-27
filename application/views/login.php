<html>
    <head>
        <title>Login & Signup Page</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/form.css">
       <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/nav_bar.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/btn.css">
    </head>
<body background="<?php echo base_url();?>/dc1_images/32b877ed4aa7778cc7d43ebb7d95a6f1.png" style="background-attachment: fixed; background-repeat: no-repeat;">



   <!navbar start>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark"> 
  <div class="navbar-brand text-white font-weight-bold"  style="margin-left: 50px;">
    <a href="#">
   <img src="<?php echo base_url();?>/dc1_images/New folder/155189227923227433.jpg.gif" width="50" height="45"></a>
    </div>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav navbar-nav ml-auto" style="margin-right: 20px;">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>dental1/homepage">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link  " href="<?php echo base_url();?>dental1/homepage/OurPractices">OUR PRACTICE<span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item ">
        <a class="nav-link " href="<?php echo base_url();?>dental1/homepage/services_oral_hygiene">SERVICES<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           SMILE GALLARY
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url();?>dental1/homepage/photos">Photos</a>
          <a class="dropdown-item" href="<?php echo base_url();?>dental1/homepage/video_gallary">videos</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ABOUT US
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url();?>dental1/homepage#clinic">Clinic</a>
          <a class="dropdown-item" href="<?php echo base_url();?>dental1/homepage#ashish">Dr.Ashish</a>
          <a class="dropdown-item" href="<?php echo base_url();?>dental1/homepage#vishu">Dr.Vishu</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CONTACT US
        </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="https://wego.here.com/directions/mix//Acme-Dental-Lounge-Health-Medi-Center,-Office-no-4,-Westend-Shopping,-opp-Aundh-DMart,-New-D-P-Road-Aundh,-411007-Pune:e-eyJuYW1lIjoiQWNtZSBEZW50YWwgTG91bmdlICYgSGVhbHRoIE1lZGkgQ2VudGVyIiwiYWRkcmVzcyI6Ik9mZmljZSBubyA0LCBXZXN0ZW5kIFNob3BwaW5nLCBvcHAgQXVuZGggRCdNYXJ0LCBOZXcgRCBQIFJvYWQgQXVuZGgsIFB1bmUsIE1haGFyYXNodHJhIiwibGF0aXR1ZGUiOjE4LjU2NjQ0MzU3MjM5NSwibG9uZ2l0dWRlIjo3My44MDc1OTUzNzIyLCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjE3MzA0MDQzMzMwMTc3NX0=?map=18.89244,74.46188,8,normal&fb_locale=en_GB"><i class="fa fa-map-marker fa-2x"></i></a>
           
          <a class="dropdown-item" href="https://www.facebook.com/Acme-Dental-Lounge-Health-Medi-Center-173040433301775/"><i class="fa fa-facebook-square fa-2x"></i></a>
           <a class="dropdown-item" href="<?php echo base_url();?>dental1/homepage/contact">Contact</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url();?>dental1/homepage/login">User</a>
          <a class="dropdown-item" href="<?php echo base_url();?>dental1/homepage/adminlogin">Admin</a>
        </div>
      </li>
      <li class="nav-item">
       <a class="btn text-white btn1" role="button" style="border:none;" href="<?php echo base_url();?>dental1/homepage/login">
          BOOK APPOINTMENT 
        </a>
      </li>
    </ul>
  </div>
</nav>
<!navbar end> 












         
     
 
<div class="container-floid">
   <div class="row">
       
        <div class="col-lg-5 col-md-8 col-sm-10 col-12 d-block m-auto">
         <! form start>
         <div class="form-container" style="margin-top: 150px;">
            <?php echo form_open('index.php/Loginvali/index'); ?>
            <h1 class="text-dark">Login</h1>
   
            <div class="form-group">
               <label for="exampleInputEmail1">Email</label>
               <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter Email','name'=>'email']);?>
               <?php echo form_error('email');?>
            </div>

            <div class="form-group">
               <label for="Password1">Password</label>
               <?php echo form_password(['class'=>'form-control','type'=>'Password', 'placeholder'=>'Enter Password','name'=>'pass1']);?>
               <?php echo form_error('pass1');?>
            </div>

            <button type="submit" class="btn btn-dark btn-block btn1">Submit</button>
            <br/>
            <a href="#">Forgot Password ?</a><br>
            <a href="<?php echo base_url();?>dental1/homepage/signup">Signup now and create an account</a>
        </div>
     <! form end>
   </div> 
  


    </body>
</html>