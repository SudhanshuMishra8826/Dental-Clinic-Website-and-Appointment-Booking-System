  
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

         <style>
#grad1 {
  height: 55px;
  background-color: #68CBFD; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right, #68CBFD, orange); /* Standard syntax (must be last) */
}
</style>
    </head>
<body id="grad1" style="background-attachment: fixed; background-color:#68CBFD  ; background-repeat: no-repeat; background-size: cover;">



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
          <a class="dropdown-item" href="<?php echo base_url();?>dental1/homepage/about_us#ashish">Dr.Ashish</a>
          <a class="dropdown-item" href="<?php echo base_url();?>dental1/homepage/about_us#vishu">Dr.Vishu</a>
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
       <a class="btn   text-white btn1" role="button" style="border:none;" href="<?php echo base_url();?>dental1/homepage/login">
          BOOK APPOINTMENT 
        </a>
      </li>
    </ul>
  </div>
</nav>
<!navbar end> 













     
<div class="container-floid bg">
   <div class="row">
       
        <div class="col-lg-5 col-md-8 col-sm-10 col-12 d-block m-auto">
         <! form start>
          <div class="form-container" style="margin-bottom: 50px; margin-top: 120px; ">
          <?php echo form_open('index.php/Admin/index'); ?>
          <h1>Signup</h1>
           <br>
          <div class="form-group">
            <label for="username"><h6>Username</h6></label>
            <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter Username','name'=>'uname']);?>
            <?php echo form_error('uname');?>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"><h6>Email</h6></label>
            <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter Email','name'=>'email']);?>
            <?php echo form_error('email');?>
          </div>

          <div class="form-group">
            <label for="Password1"><h6>Password</h6></label>
            <?php echo form_password(['class'=>'form-control','type'=>'Password', 'placeholder'=>'Enter Password','name'=>'pass1']);?>
            <?php echo form_error('pass1');?>
          </div>

          <div class="form-group">
            <label for="Password2"><h6>Confirm Password</h6></label>
            <?php echo form_password(['class'=>'form-control','type'=>'Password', 'placeholder'=>'Confirm Password','name'=>'pass2']);?>
          </div>

          <div class="form-group">
             <label for="Occupation"><h6>Occupation</h6></label>
             <?php echo form_input(['class'=>'form-control','type'=>'text', 'placeholder'=>'Enter your Occupation','name'=>'occupation']);?>
             <?php echo form_error('occupation');?>
          </div>

          <div class="form-group">
             <label for="address"><h6>Address</h6></label>
             <?php echo form_input(['class'=>'form-control','type'=>'text', 'placeholder'=>'Enter your Address','name'=>'address']);?>
             <?php echo form_error('address');?>
          </div>

          <div class="form-group">
             <label for="address"><h5>Sex</h5></label>&nbsp&nbsp&nbsp&nbsp&nbsp
             <input type="radio" name="sex" value="male">Male      &nbsp
             <input type="radio" name="sex" value="female">Female  &nbsp
             <input type="radio" name="sex" value="others">Others  &nbsp
             <?php echo form_error('sex');?>
          </div>  

          <div class="form-group">
             <label for="DOB"><h6>DOB</h6></label> &nbsp&nbsp&nbsp&nbsp
             <input type="date" name="dob">
             <?php echo form_error('dob');?>
          </div> 

          <div class="form-group">
             <label for="contact"><h6>Contact 1</h6></label>
             <?php echo form_input(['class'=>'form-control','type'=>'text', 'placeholder'=>'Enter your Contact No.','name'=>'contact1']);?>  
             <?php echo form_error('contact1');?><br>
             <label for="contact"><h6>Contact 1</h6></label>
             <?php echo form_input(['class'=>'form-control','type'=>'text', 'placeholder'=>'Enter your Alternate Contact No.','name'=>'contact2']);?>
             <?php echo form_error('contact2');?>
          </div>   


        <?php echo form_submit(['type'=>'submit','class'=>'btn btn-dark btn-block btn1','value'=>'Submit']); ?>
        <br/>
   
        <?php echo form_reset(['type'=>'reset','class'=>'btn btn-dark btn-block btn1','value'=>'Reset']); ?>
        <br/>
        <a href="<?php echo base_url();?>dental1/homepage/login">Signin now </a>
   </div>
<! form end>
</div>
 



    </body>
</html>