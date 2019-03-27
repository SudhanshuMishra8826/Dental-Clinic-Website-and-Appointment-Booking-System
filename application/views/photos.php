 <!DOCTYPE html>
 <html>
 <head>
   <title>Image gallery</title>
   <meta charset="utf-8">
   <meta  name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/nav_bar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/btn.css">







    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/gallery/css/gallery.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/dc1_style/gallery/css/lightbox.min.css">
    <script src="<?php echo base_url();?>/dc1_style/gallery/js/lightbox-plus-jquery.min.js"></script>
 </head>
 <body>
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
        <a class="nav-link " href="<?php echo base_url();?>dental1/homepage/OurPractices">OUR PRACTICE<span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item ">
        <a class="nav-link " href="<?php echo base_url();?>dental1/homepage/services_oral_hygiene">SERVICES<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          <a class="dropdown-item" href="<?php echo base_url();?>dental1/homepage/about_us">Clinic</a>
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
           
           <a class="dropdown-item" href="https://www.google.com/search?source=hp&ei=te6DXMD9KIKUvQTIqLmoBQ&q=acme+dental+lounge&oq=&gs_l=mobile-gws-wiz-hp.1.1.35i39l5.0.0..6359...1.0..0.0.0.......0...........5.xQ5Z_uRKkeE#lkt=LocalPoiReviews&trex=m_t:lcl_akp,rc_f:nav,rc_ludocids:3983877760138644117,rc_q:Acme%2520Dental%2520Lounge%2520And%2520Health%2520Medi%2520Center%2520%257B%2520Acme%2520Dental%2520Care%2520%257D,ru_q:Acme%2520Dental%2520Lounge%2520And%2520Health%2520Medi%2520Center%2520%257B%2520Acme%2520Dental%2520Care%2520%257D">My Google page</a>
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
  <h2 class="text-white" style="padding-top: 50px;"><span style="font-style: italic;  ">Smile Photo Gallery</span>  </h2>
  <hr style="width: 10%; border-color: white;  border-width: 2px; padding-bottom: 40px;">
</section>



  <div class="gallery">
    <a href="<?php echo base_url();?>/dc1_images/images/26907872_176020513003767_1167050437066330406_n.jpg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/26907872_176020513003767_1167050437066330406_n.jpg" width="300" height="150"></a>

    <a href="<?php echo base_url();?>/dc1_images/images/26229999_174082143197604_5273773021954518344_n.jpg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/26229999_174082143197604_5273773021954518344_n.jpg" width="300" height="150"></a>
    <a href="<?php echo base_url();?>/dc1_images/images/44213229_302082260397591_9074665258156556288_n.jpg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/44213229_302082260397591_9074665258156556288_n.jpg" width="300" height="150"> </a>
    <a href="<?php echo base_url();?>/dc1_images/images/26804960_176020516337100_4471383098197088894_n.jpg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/26804960_176020516337100_4471383098197088894_n.jpg" width="300" height="150"></a>
    <a href="<?php echo base_url();?>/dc1_images/images/44229698_302082307064253_6156379291425701888_n.jpg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/44229698_302082307064253_6156379291425701888_n.jpg" width="300" height="150"> </a>
    <a href="<?php echo base_url();?>/dc1_images/images/44286388_302082290397588_3304832207327068160_n.jpg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/44286388_302082290397588_3304832207327068160_n.jpg" width="300" height="150"></a>


    <a href="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.12.01 PM (1).jpeg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.12.01 PM (1).jpeg" width="300" height="150"></a>
    <a href="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.12.02 PM (1).jpeg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.12.02 PM (1).jpeg" width="300" height="150"></a>
    <a href="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.12.02 PM.jpeg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.12.02 PM.jpeg" width="300" height="150"></a>
    <a href="<?php echo base_url();?>/dc1_images/images/1.jpeg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/1.jpeg" width="300" height="150"></a>
     <a href="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.11.52 PM.jpeg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.11.52 PM.jpeg" width="300" height="150"></a>
      <a href="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.11.53 PM.jpeg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.11.53 PM.jpeg" width="300" height="150"></a>
       <a href="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.11.59 PM.jpeg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.11.59 PM.jpeg" width="300" height="150"></a>
        <a href="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.11.57 PM (1).jpeg" data-lightbox="mygallery" data-title="Acme Dental Care"><img src="<?php echo base_url();?>/dc1_images/images/WhatsApp Image 2019-03-05 at 8.11.57 PM (1).jpeg" width="300" height="150"></a>






  </div>

 </body>
 </html>