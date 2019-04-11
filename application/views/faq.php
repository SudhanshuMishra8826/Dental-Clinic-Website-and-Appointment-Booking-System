<?php
//version 1
$this->load->library('session');
    //session_start();
    if(isset($_SESSION['name']))
    {
    $name=$_SESSION['name'];
    $id=$_SESSION['id'];
    }
    else
    {
    echo '<script language="javascript">';
    echo 'alert("Invalid login try again")';
    echo '</script>';
    redirect('/Dental1/homepage', 'refresh');

    //$this->load->view('homepage');
    }
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

   <style type="text/css">
       p{
        font-size: 18px;
       }
       ol li{
         font-size: 24px;

       }
         a{
        text-decoration: none;

       }
       .questions li{
           font-size: 18px;
       }
   </style>



</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4 class="brand"><span style="font-style: italic; color: red;">Acme</span> Dental Care</h4>
            </div>

            <ul class="list-unstyled components">
                 
                <li  >
                    <a href="<?php echo base_url();?>/dental1/dash_home_load/">Home</a>
                     
                </li>
                <li>
                    <a href="<?php echo base_url().'appointment/savedata/';?>">Book Appointments</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>/dental1/history/">History</a>
                     
                </li>
                <li class="active">
                   <a href="<?php echo base_url();?>dental1/faq">Help</a>  
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
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>dental1/notifications">
                                <div  class="text-secondary" style="padding: 2px 20px 2px; margin-top: 0px; ">                                    <?php 
                                    if($bool==1){
                                        echo '<i class="fas fa-bell text-danger"></i>';
                                    }
                                    else {
                                        echo '<i class="fas fa-bell"></i>';
                                    }
                                     ?> 
                                </div>
                            </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url();?>dental1/logout">Logout</a>
                            </li>
                             
                             
                        </ul>
                    </div>
                </div>
            </nav>

<!---------------------------------------------------------------FAQ---------------------------------------------------------------------->
<h1>FAQ</h1>
<h2>Table of Contents.. Click out to jump to it..
<h2>
<ol class="questions">
    <li><a href="#Question 1">Do I really need to floss?</a></li>
    <li><a href="#Question 2">Does a rinse or mouthwash help?</a></li>
    <li><a href="#Question 3">Are dental X-rays safe and needed?</a></li>
    <li><a href="#Question 4">How do fillings work?</a></li>
    <li><a href="#Question 5">What's the best way to whiten my teeth?</a></li>
    <li><a href="#Question 6">How can I fix my teeth and smile?</a></li>
    <li><a href="#Question 7">What is dentistry?</a></li>
    <li><a href="#Question 8">Why do regular dental visit matter?</a></li>
    <li><a href="#Question 9">What are some signs I should see a dentist?</a></li>
    <li><a href="#Question 10">What can I expect during a dental checkup?</a></li>
    <li><a href="#Question 11">How often do I have to go to the dentist?</a></li>
    <li><a href="#Question 12">How can I maintain a healthy smile with my dentist's help?</a></li>
    <li><a href="#Question 13">What's the difference between a DDS and DMD?</a></li>
    <li><a href="#Question 14">I'm not having any symptoms. Do I still need to see a dentist?</a></li>
    <li><a href="#Question 15"> How can I prevent cavities??</a></li>
</ol>
<br>
 <h1>Answers:</h1>
<ol >
   
<li style="font-size: 24px"><a href="#Question 1">Do I really need to floss?</a></li>
 
<a name="Question 1"></a>
<br/>
<p style="font-size: 18px"> There's no getting around the need to get around your 
teeth daily with dental floss. 
It clears food and plaque from between teeth and under the gumline. 
If you don't, plaque hardens into tartar, 
which forms wedges and widens the space between 
teeth and gums, causing pockets. Over time, 
gums pull away and teeth loosen.</p>
 
 <hr style="border-top: solid; border-color:#4db8ff;">
 <br>
<li><a href="#Question 2">Does a rinse or mouthwash help?</a></li>
<br />
<a name="Question 2"></a>
<p>Mouthwashes for cavity protection, sensitivity, and fresh 
breath may help when you use them with regular brushing 
and flossing -- but not instead of daily cleanings. Your 
dentist can recommend the best type for you.
Some people need twice-daily rinses for gum health or 
alcohol-free washes for dry mouth.
Kids under 6 shouldn't use mouthwash to avoid the chance 
of them swallowing it.</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 3">Are dental X-rays safe and needed?</a></li>
<br />
<a name="Question 3"></a>
<p>Medical and dental experts study the use of X-rays and set 
limits for their safety. Your dentist should take as few as 
possible.
Expect to get them during a first exam after not seeing a 
dentist for a while. This helps check tooth and gum health. 
If you have gum disease, the dentist may want pictures 
every 6 months. For regular check-ups, it's about every 2 
years, depending on your dentist's plan.</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 4">How do fillings work?</a></li>
<br />
<a name="Question 4"></a>
<p>Cavities break through the surface enamel of teeth, and 
they'll probably get bigger unless you close them off 
with fillings.
Your dentist will numb your mouth before drilling around 
the cavity to prep it. A combination of strong materials or 
a white mix called a composite goes into the cavity soft 
and then hardens as it dries. You may feel pain or pressure 
when getting the numbing shot and during the drilling.
Once set, fillings can last a long time but need replacing if 
they break or wear down.</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 5">What's the best way to whiten my teeth?</a></li>
<br />
<a name="Question 5"></a>
<p>
Stores sell many whitening products, and you can get 
take-home gels and trays from your dentist, but neither 
is as strong as procedures done in a dental office
If you want to try an over-the-counter whitener, look for 
one with an ADA seal. Check with your dentist for advice 
before you buy, especially if you have dental work or 
dark stains. And don't keep using them, or you could 
damage your teeth.</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 6">How can I fix my teeth and smile?</a></li>
<br />
<a name="Question 6"></a>
<p>
Caps and crowns cover problem teeth by surrounding 
them in a material that looks like a real tooth. They use 
the root and inside of the tooth as a base to build on, 
then attach with special cement.</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 7">What is dentistry?</a></li>
<br/>
<a name="Question 7"></a>
<p>
Dentistry is the diagnosis, treatment, and prevention of 
conditions, disorders, and diseases of the teeth, gums, 
mouth, and jaw. Often considered necessary for complete 
oral health, dentistry can have an impact on the health of 
your entire body.</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 8">Why do regular dental visit matter?</a></li>
<br />
<a name="Question 8"></a>
<p>
Regular dental visits are important because they can help spot 
dental health problems early on when treatment is likely to be 
simpler and more affordable. They also help prevent many 
problems from developing in the first place. Visiting your 
dentist regularly is also important because some diseases or medical 
conditions have symptoms that can appear in the mouth.</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 9">What are some signs I should see a dentist?</a></li>
<br />
<a name="Question 9"></a>
<p> 
 
Your gums are puffy and/or they bleed when you brush or floss
<br />
 
You have fillings, crowns, dental implants, dentures, etc.
<br />
<br />
You don’t like the way your smile or teeth look
<br />
<br />
You have persistent bad breath or bad taste in your mouth
<br />
<br />
You are pregnant
<br />
<br />
You have pain or swelling in your mouth, face or neck
<br />
<br />
You have difficulty chewing or swallowing
<br />
<br />
You have a family history of gum disease or tooth decay
<br />
<br />
You have a medical condition such as 
diabetes, cardiovascular disease, eating 
disorders or are HIV positive
<br />
<br />
Your mouth is often dry
<br />
<br />
You smoke or use other tobacco products
<br />
<br />
You are undergoing medical treatment such 
as radiation, chemotherapy or hormone 
replacement therapy
<br />
<br />
Your jaw sometimes pops or is painful when 
opening and closing, chewing or when you 
first wake up; you have an uneven bite
<br />
<br />
You have a spot or sore that doesn’t look or 
feel right in your mouth and it isn’t going 
away</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 10">What can I expect during a dental checkup?</a></li>
<br />
<a name="Question 10"></a>
<p>The dentist or hygienist will ask about your recent 
medical history, examine your mouth and decide 
whether or not you need x-rays. Depending on 
your treatment plan, the hygienist may use a 
special dental instruments to check your gums for 
gum disease. Your dentist will evaluate your 
overall dental health and conduct an oral cancer 
screening by holding your tongue with gauze, 
checking it and your whole mouth, then feeling 
your jaw and neck. </p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 11">How often do I have to go to the dentist?</a></li>
<br />
<a name="Question 11"></a>
<p>
There is no one-size-fits-all dental treatment. 
Some people need to visit the dentist once or 
twice a year; others may need more visits. You are 
a unique individual, with a unique smile and 
unique needs when it comes to keeping your smile 
healthy.</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 12">How can I maintain a healthy smile with my dentist's help?</a></li>
<br />
<a name="Question 12"></a>
<p>Here are some tips to help you take care of your smile:
<br />
<br />
Healthy habits.<br /> Brushing twice a day for 
two minutes and flossing daily are essential 
for everyone, no matter how unique your 
mouth is. It’s the best way to fight tooth 
decay and gum disease.
<br />
<br />
Build a relationship.<br /> Continuity of care is 
an important part of any health plan 
and dental health is no exception. When your 
dentist sees you regularly, he or she is in a 
good position to catch oral problems early. 
For instance, catching gum disease when 
it’s still reversible, or cavities when they are 
small and are more easily treated.
<br />
<br />
Maintain.<br /> Keeping your mouth healthy is an 
essential piece of your overall health. It’s 
important to keep your dentist informed of 
any changes in your overall health as well.
<br />
<br />
Talk about it!<br /> Only your dentist can 
determine what the best treatment plan is 
for you. Have questions about your oral 
health or certain dental procedures? Start a 
conversation. Ask your dentist to explain 
step-by-step. Dentists love having satisfied, 
healthy patients.</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 13">What's the difference between a DDS and DMD?</a></li>
<br />
<a name="Question 13"></a>
<p>If you’re looking to find a dentist you may notice 
that while most are listed with a “DDS”, some may 
be listed as “DMD”. They both mean the same 
thing—your dentist graduated from an accredited 
dental school. The DDS (Doctor of Dental Surgery) 
and DMD (Doctor of Dental Medicine) are the 
same degrees. Dentists who have a DMD or DDS 
have the same education. The level of education 
and clinical training required to earn a dental 
degree, and the high academic standards of dental 
schools are on par with those of medical schools. 
Upon completion of their training, dentists must 
pass both a rigorous national written exam and a 
state or regional clinical licensing exam in order to 
practice. In order to keep their licenses, they must 
meet continuing education requirements for the
remainder of their careers so that they may stay 
up to date on the latest scientific and clinical 
developments</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 14">I'm not having any symptoms. Do I still need to see a dentist?</a></li>
<br />
<a name="Question 14"></a>
<p>Yes. Even if you don’t have any symptoms, you 
can still have dental health problems that only a 
dentist can diagnose. Regular dental visits will also 
help prevent problems from developing. Continuity 
of care is an important part of any health plan and 
dental health is no exception. Keeping your mouth 
healthy is an essential piece of your overall health. 
It’s also important to keep your dentist informed of 
any changes in your overall health since many 
medical conditions can affect your dental health 
too.</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
<li><a href="#Question 15"> How can I prevent cavities??</a></li>
<br />
<a name="Question 15"></a>
<p>Always spend two to three minutes brushing your teeth. It takes that long to 
get rid of the bacteria that destroy tooth enamel. Do not brush too hard. It 
takes very little pressure to remove bacteria and plaque. Floss at least once a 
day. Flossing is the only way to get bacteria from between your teeth. 
<br />
<br />
Watch the sugar you eat. There is sugar in candy, fruits, crackers and chips. 
These are the foods that the bacteria in your mouth like best. Be mindful of 
foods like raisins and peanut butter that stick to your teeth. They can provide a 
constant supply for the bacteria eating into your teeth. Try to minimize the 
times during the day when sweet items are eaten and brush your teeth 
afterwards.
<br />
<br />
If you cannot brush after a meal, rinse your mouth with water - which can help 
to remove food from your teeth. Chewing sugarless gum after a meal can also 
help. Chewing deskulates the flow of your saliva which acts as a natural 
plaque-fighting substance. And do not forget your regular dental visits. Good 
dental habits will go a long way toward a no-cavity visit.
</p>
<hr style="border-top: solid; border-color:#4db8ff;">
<br />
 
</ol>











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


