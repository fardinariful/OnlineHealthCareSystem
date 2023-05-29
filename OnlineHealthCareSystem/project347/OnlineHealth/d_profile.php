<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Profile</title>
</head>

<style>
h1{
font-size:50px;
text-align:center;
padding-top:30px;
color:white;
}
img 
{ 
float: left;
width: 77px;
}
li{
font-size:24px;
}
h3{
font-size:24px;
letter-spacing:4px;
}
body {
margin:0;
padding:0;
      font: 400 15px/1.8 Lato, sans-serif;
      color: navy;
width:100%;
height:100vh;
background-image:url(doc5.jpg);
background-size:cover;
}
</style>
<body class="container display-4">
  
                       
<div class="w3-row">


<div class="w3-col 18 s12">
 
  <div class="w3-card-4  w3-white">
    <div class="w3-container">
                     <h1  class=" text-center font-weight-bold text-warning w3-blue"> Doctor Personal Profile</h1>
                       
<h3><?php
session_start();

include 'translate.php';

$db = mysqli_connect('localhost', 'root', '', 'onlinehealthcare_db');


//$email = mysqli_real_escape_string($db, $_POST['email']);
//$email=$_SESSION['id'];
$edit_fname_query="select * from onlinehealthcare_form_doctor where email='kapoor@gmail.com'" ;
  
	
	$edit_run_fname_query=mysqli_query($db,$edit_fname_query);
 
				   while($row = mysqli_fetch_array($edit_run_fname_query))
				   {
				     echo"ID :  ";   echo $row['id'];  echo "  " ; echo  "<br />";   
echo" Name : "; echo $row['name'] ; echo "  " ;  echo  "<br />";   				

echo"Email Address :  ";   echo $row['email'];  echo "  " ; echo  "<br />" ;
echo"Contact Number :  ";  echo $row['number'] ; echo "  " ; echo  "<br />";
echo"Address :  "; 		   echo $row['address'] ; echo "  " ; echo "<br />";
					   }

	?></h3>
             
<div class="container ">
<ul class="pager font-weight-bold text-monospace">
  <li class="previous "><a href="doctor_home_page.php">Previous</a></li>
  
</ul></div>
                 </div>
      </div>
    </div>
  </div>
         
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
                
</body>
</html>
