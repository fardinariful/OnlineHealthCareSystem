
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>ONLINE HEALTHCARE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
  .container {
      padding: 80px 120px;
     
  }
  .carousel-inner img {
    -webkit-filter: grayscale(60%);
      filter: grayscale(60%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: white !important;
  }
 
  .bg-1 {
      background: skyblue;
      color: navy;
  }
  .bg-1 h3 {color: #fff;
  font-size:24px;}
  .bg-1 p {
  font-size:20px;
}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  

  .nav-tabs li a {
      color:#999999;
  } 
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: navy;
      border: 0;
      font-size: 16px !important;
	font-weight:900;
      letter-spacing: 2px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: white !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: white;
      background-color: blue !important;
  }
  .dropdown-menu li a {
      color: navy !important;
  }
  .dropdown-menu li a:hover {
      background-color: skyblue !important;
  }
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }    footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color:#999999;
  }  .container-fluid {
      padding: 5px 20px;
      color: white;

  }
  
  </style></head>

  <?php
	  // include("connection.php");
    $db = mysqli_connect('localhost','root','','onlinehealthcare_db');
error_reporting(0);
 $queryPermission="WHERE permission='Approved'";
  $show_number_pending_request_query = "SELECT * 
                  FROM doctor $queryPermission 
				";
				   $run = mysqli_query($db, $show_number_pending_request_query);
				   $count=mysqli_num_rows($run);
	

 

?>
<?php    $queryPermission="WHERE permission='Approved' || permission='Added' ";
       $show_approve_request_query = "SELECT * 
                  FROM doctor WHERE permission='Approved' || permission='Added'
				 ";
$n_query=mysqli_query($db,$show_approve_request_query );
                              while($drow = mysqli_fetch_array($n_query))
				                  {}
								    $count=mysqli_num_rows($n_query);
								  ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid ">
    <div class="navbar-header">
      <a class="navbar-brand text-dark" href="#myPage"><strong>স্বাস্থ্য সেবা</strong></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">LogIn <span class="caret"></span></a>
          <ul class="dropdown-menu">
                  <li><a href="doctor_login.php">Doctor</a></li>
                  <li><a href="joinus1.php">patient</a></li>
            	<li><a href="adminlogin.php">Admin</a></li>
                  </ul>
         
                  <li><a href = "services.php">Services</a> </li>
<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Doctors
          <span class="caret"></span></a>
          <ul class="dropdown-menu">   
          <li> <a href='medicine.php'>Medicine</a></li>
    <li>  <a href='dentist.php'>Dentist</a></li> 
          <li> <a href='surgeon.php'>Surgeon</a></li>
     <li>  <a href='gynae.php'>Gynae</a></li> 
      <li> <a href='bone.php'>Orthopedic</a></li>
      <li> <a href='pediatrics.php'>Pediatrics</a></li>
      <li> <a href='cardiologist.php'>Cardiologist</a></li>
      
     </ul>
        </li>
        <li><a href="disease_prediction.php">Suggest Doctor</a></li>
        <li> <a href="blog/blog_front_page.php" >Blog</a></li>
          
     
   <li> <a href="#contact" onclick="toggleFunction()">Contact Us</a></li>
                       <?php
if(isset($error_msg)){echo $error_msg;}
?>
       </form></li>
       </li> 

      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="capture1.jpg" alt="img1" width="1200" height="700">

      </div>

      <div class="item">
        <img src="doctor1.jpg" alt="img2" width="1200" height="700">
             
      </div>
      <div class="item">
        <img src="doctor2.jpg" alt="img3" width="1200" height="700">
             
      </div>
      <div class="item">
        <img src="doctor3.jpg" alt="img4" width="1200" height="700">
             
      </div>
    
      <div class="item">
        <img src="doctor4.GIF" alt="img5" width="1200" height="700">
             
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div id="#" class="bg-1 ">
  <div class="container">
    <h3 class="text-center">স্বাস্থ্য সেবা</h3>
  <p class="text-center"> <strong style="color: navy"><em><b>We are here for your care!</b> </em></p> </strong>
  <p class="text-center">  <strong style="color: navy">আপনার সুস্থতা আমাদের কাছে দামী । আমারা জানি,প্রিয়জনের অসুস্থতা আপনাকে কতটা কষ্ট দেয়| আর তাই নির্ভূল রোগ নির্ণয়ের মাধ্যমে সঠিক চিকিৎসায় আমরা রাখতে চাই সর্বোচ্চ ভূমিকা। সুস্থ থাকুক আপনার প্রিয়জন, সুস্থ থাকুন আপনি নিজে।<br><a href="signin1.php" style = "color:white">Make Appointment</a></strong> 
 </p>
  
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64 w3-white" style="max-width:100%"  id="contact">
    <h2 class="w3-wide w3-center text-center text-capitalize">CONTACT US</h2>
    <p class="w3-normal w3-center"><i>If you want to know anythings from us ? Please Drop a note here !</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i>Dhaka, Bangladesh<br>
        <i class="fa fa-phone" style="width:30px"></i> Number: +088......<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email:admin@gmail.com<br>
      </div>
      <?php
	  if(isset($_POST["submit"])){
$c_name = $_POST['name'];
$c_gmail = $_POST['gmail'];
$c_text = $_POST['text'];

   
	 if(empty($c_gmail))
	   {
	   $error_msg="Please Provide Your Gmail/Email";
	   }
	 
	   else
	   
	   { $comment_query="INSERT INTO comment(name,gmail,text)     
	                            VALUES('$c_name','$c_gmail','$c_text')" ;
								mysqli_query($db,$comment_query);
							$run= $success_msg="Successfully Submitted";
				
					
				
							 }
	
}
	 
?>
      <!--Contact Us-->
      <div class="w3-col m6" >
    <form action = "home2.php" method="POST" >
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="name" placeholder="Name" required name="name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="email" placeholder="Email/Gmail" required name="gmail">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="number" placeholder="Age" required name="age">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Message" required name="text">
            </div>
          </div>
          <!-- <input class="w3-input w3-border" type="text" placeholder="Message" required name="text"> -->
               
           <input type ="submit" class="w3-button w3-blue w3-section w3-center" name="submit" value="Send MESSAGE"> 
        <?php
if(isset($error_msg)){echo $error_msg;}
if(isset($success_msg)){echo $success_msg;}
	
?>
        </form>
      </div>
    </div>
  </div>
  
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar 
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
