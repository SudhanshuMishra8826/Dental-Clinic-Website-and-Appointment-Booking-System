<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <title>Login & Signup Page</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
       
       <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/nav_bar.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/btn.css">
    </head>
<body>



   <!navbar start>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark"> 
  <div class="navbar-brand text-white font-weight-bold"  style="margin-left: 50px;">
    <a href="<?php echo base_url();?>dental1/homepage/elements">
    <img src="<?php echo base_url();?>/dc1_images/WPFtdnZn_400x400.jpg" width="50" height="35"></a>
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
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

          
 

<section class="container-fluid bg-info text-center" style="margin-top: 50px;">
  <h2 class="text-white" style="padding-top: 50px;"><span style="font-style: italic;  ">Contact Us</span>  </h2>
  <hr style="width: 10%; border-color: white;  border-width: 2px; padding-bottom: 40px;">

</section>



     







 
   <div class="container"> 
    <div class="row"> 
        <div class="col-lg-6 col-md-6 col-sm-10 col-10 d-block m-auto"  >
           <div class="d-block m-auto">
                   <! form start>
          <div class="form-container">
          <?php echo form_open('index.php/contact/save'); ?>
          
          <div class="form-group">
            <label for="username" >Username</label>
            <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter Username','name'=>'uname']);?>
            <?php echo form_error('uname');?>
          </div>
           
          <div class="form-group">
            <label for="Email">Email</label>
            <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter Email','name'=>'email']);?>
            <?php echo form_error('email');?>
          </div>

          <div class="form-group">
             <label for="contact">Contact</label>
             <?php echo form_input(['class'=>'form-control','type'=>'text', 'placeholder'=>'Enter your Contact No.','name'=>'contact']);?>  
             <?php echo form_error('contact');?> 
              
          </div>  
           

 

          <div class="form-group"  >
             <label for="Subject">Subject</label>
             <?php echo form_input(['class'=>'form-control','type'=>'text', 'placeholder'=>'Subject','name'=>'subject']);?>
             <?php echo form_error('subject');?>
          </div>
           
          <div class="form-group" >
             <label for="Message">Message</label>
             
             <?php echo form_textarea(['class'=>'form-control','type'=>'textarea','rows'=>'3', 'cols'=>'50', 'placeholder'=>'note','name'=>'message']);?>
             <?php echo form_error('message');?>
           </div>
           
           

           
           
       
           
        <?php echo form_submit(['type'=>'submit','class'=>'btn btn-dark btn-block btn1','value'=>'Submit']); ?>
        <br/>
         
          
        
       
         
        
   </div>
<! form end> 
           </div>
        </div>
         
        <div class="col-lg-6 col-md-6 col-sm-10 col-10 d-block m-auto"  >
           <div class="d-block m-auto">
                <div class="mapouter">
                   
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="420" height="451" id="gmap_canvas" src="https://maps.google.com/maps?q=acme%20dental%20care%20pune&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{text-align:right;height:70%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:140%;width:100%;}</style></div>
                   </div> 
            
        </div> 
    </div>    
 </div>



    <div class="text-center">
       <p class="text-center text-secondary">Office no 4, Westend Shopping, opp Aundh D'Mart, New D P Road Aundh Pune, Maharashtra.<br> 
         Call 099234 59984 <br>              
        acmedental@gmail.com<br> 
        Monday to Saturday <br> 
        (10:30am-02:30pm and 05:30pm-08:30pm)</p>
    </div>
</section>


</body>
</html>