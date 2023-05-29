<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>medicine</title>
</head>
<style>
h1{
font-size:50px;
text-align:center;
padding-top:20px;
color:#000066;
}
li{
font-size:20px;
}
ul{
font-size:24px;
}
ul h3{
font-size:26px;
}
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
body {margin:0;
padding:0;
width:100%;
height:100vh;
background-image:url(m.jpg);
background-size:cover;}
div ul
{
padding-bottom:70px;
}
</style>
<body class="container-fluid">
<h1 class="text-monocase text-capitalize text-center text-blue">All The Doctor's Schedule List Of Medicine</h1>
    
<ul class="text-center font-weight-bold text-blue text-dark">  
<table border="1" 
class="table table-hover table-light">
  <thead>
    <tr>
      <th scope="col" >Name</th>
      <th scope="col" >Specialist</th>
      
      <th scope="col">Qualification</th>

    </tr>
  </thead>

<?php 
include("connection.php");
include 'translate.php';
?><br/>
<?php

       $query ="SELECT * 
                     FROM doctor inner join schedule on schedule.d_id=doctor.id   where permission='approved' AND specialist like'm%' OR permission='Added' AND specialist like'm%' ";
				   $run = mysqli_query($db, $query);
				   while($row = mysqli_fetch_array($run))
				   {
				         
					  echo  "<h3><tr><th><a>{$row['f_name']}{$row['l_name']}</a></h3>";
						 echo "<h3><th>". $row['specialist'] ." </h3>" ;
						   echo "<h3><th>". $row['qualification'] ." </th></tr></h3>";
				   }
				    
			   ?></table></ul>
                   
<div class="container ">
<ul class="pager font-weight-bold text-monospace">

   <li class="previous" ><a href="home2.php">Previous</a></li>
  <li class="next"><a href="dentist.php">Next </a></li>
</ul></div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
              
</body>
</html>
