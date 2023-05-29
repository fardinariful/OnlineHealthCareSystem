
<?php

$conn = mysqli_connect('localhost','root','','onlinehealthcare_db') or die('connection failed');
include 'translate.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="style.css" rel="stylesheet" type="text/css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>list of_appointment</title>
</head>
<style>ul{
font-size:24px;
}
h1{
font-size:50px;
padding-top:60px;
}
img 
{ float: left;
width: 77px;
}

body {margin:0;
padding:0;
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
width:100%;
height:100vh;

background-size:cover;
}
</style>
<body background="../pic/1.jpg" class="container display-1">
<h1 class="text-center text-capitalize text-white">List of appointment.....</h1><hr />
<form  action = "delete_user_appointment_request.php" method="POST">
<table border="1" cellPadding="13" align="center" 
class="table table-hover table-dark">
<thead>
<tr>


<th class="text-center text-dark active font-weight-bold"><h3>Doctor's Name</h3></th>
<th class="text-center text-dark active font-weight-bold"><h3> Appointment Date</h3></th>
<th class="text-center text-dark active font-weight-bold"><h3>Appointment Time</h3></th>
<th class="text-center text-dark active font-weight-bold"><h3>Patient's Name</h3></th>

</tr></thead>

<div class="container">
<ul class="pager font-weight-bold text-monospace active ">
  <li class="previous bg-dark "><a href="view_admin_home_page.php">Previous</a></li>
</ul></div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>
</html>
