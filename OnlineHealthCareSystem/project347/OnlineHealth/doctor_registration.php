
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>registration</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Doctor Registration</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<style>
   .jumbotron {
      background-color: #f4511e;
      color:#666666;
      padding: 100px 25px;
  }.container-fluid {
      padding: 60px 50px;
  } 
.bg-success{
background-color: #ccccc;
   color:black;
      padding : 100px 25px;

}
.col-50 {
  
  -ms-flex: 50%; 
  flex: 50%;
  padding: 0 16px;
}
   .bg-grey {
    margin-bottom: -35px;
      background-color: skyblue;
  }
  .icon-container {
  margin-bottom: -20px;
  padding: 7px 0;
  font-size: 24px;
}
body {
          width: 100%;
            background-image: url("s.jpg"); 
            background-position: center; 
    background-size: cover;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 1000px;
	flex-direction: column;
} 


.container h1 {
	
     background-color: navy;
     margin:center; 
     color: white;
   
}
h2 {
	text-align: center;
	margin-bottom: 20px;
     background-color: skyblue;
     margin:center; 
   
   padding: 8px;
   width: 20%;
   
}

input {
	display: block;
	border: 2px solid #ccc;
     font-weight: bolder;
	width: 50%;
	padding: 10px;
	margin: -15px auto;
	border-radius: 5px;
} 

label {
     margin:5px auto;
	color:  blue;
     background-color: black bold;
	font-size: 15Px;
	padding: 10px;
}


</style>
 <body>
<?php 
$db = mysqli_connect('localhost', 'root', '', 'onlinehealthcare_db');
if(isset($_POST["submit"])){
$name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $number = mysqli_real_escape_string($db, $_POST['number']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $specialist = mysqli_real_escape_string($db, $_POST['specialist']);
  $qualification = mysqli_real_escape_string($db, $_POST['qualification']);

  
 $pswd_len=strlen($password);

	 if(empty($name))
	   {
	   $error_msg="Please Enter Your  Name";
	   }
	   	
	    elseif(empty($email))
	   {
	   $error_msg="Please Enter Your Email Address";
	   }
	    
       elseif(empty($age))
	   {
	   $error_msg="Please Enter Your Age";
	   }
	    
	 
	    elseif(empty($number))
	   {
	   $error_msg="Please Enter Your Contact Information";
	   }
       
	    elseif(empty($specialist))
        {
        $error_msg="Please Enter Your specialist";
        }
        
	    elseif(empty($qualification))
        {
        $error_msg="Please Enter Your qualification";
        }
	
	   elseif(empty($password))
	   {
	   
	   $error_msg=" Please Enter Your Password";
	   }
	  elseif($pswd_len<=8)
	   {
	   $error_msg="Yuor Password Should Be More Than 8 Characters Long";
	   }
	   else
	   
	   { 
        
        $query = "INSERT INTO `onlinehealthcare_form_doctor` (`id`, `name`, `email`, `number`, `date`, `age`, `address`, `specialist`, `qualification`, `password`) VALUES ('$id', '$name', '$email', '$number', '$date', '$age',  '$address', '$specialist', '$qualification', '$password')";
        mysqli_query($db, $query);
							$run= $success_msg="Thank You For Registration";
				
					 echo "<script> window.location='doctor_login.php' </script> ";
				
							 }
	
	
}
	 
?>



 <div class="container-fluid text-center bg-grey col-50 width-50% ">
   <form action = "doctor_registration.php" method="POST" class="form-inline">
<div class="container ">
<h1>Doctor Registration</h1><p>Please fill in this form to create an account.</p>
      <hr>

<label for="name" style="font-size:16px"><i class="fa fa-user"></i>Name:</label><input type="text"placeholder="Enter Your Name" name="name"required>
<br /><label for="email"style="font-size:16px"><i class="fa fa-envelope"></i>   Email Address:</label><br/>
<input type="email"style="font-size:16px" placeholder="Enter Your Email Address"name="email"required>
<br/><label for="age"style="font-size:16px">   Age: </label>
<input type="number"style="font-size:16px" placeholder="Enter Your age"name="age"  required>
<br/><label for="number"style="font-size:16px"><i class="fa fa-address-card-o"></i>   Contact Number:</label>
<input type="contact"style="font-size:16px" placeholder="Enter Your Contact Number"name="number" pattern="[0-9]{11}" required>
<br/><label for="address"style="font-size:16px">   Address: </label><br/>
<textarea style="font-size:16px" placeholder="Enter Your Address"name="address"></textarea>
<br/><label for="date"style="font-size:16px"><b>Date:</b></label>
<input type="date" name="date"required>

                
                <label for="specialist"><b>Specialist:</b></label><br /><br /><select name="specialist"required>
                  <option value="Orthopedic"required>Orthopedic</option>
                  <option value="gynecologist"required>Gynecologist</option>
                  <option value="dentist"required>Dentist</option>
                  <option value= "medicine"required>Medicine</option>
                  <option value="cardiologist"required>Cardiologist </option>
                   <option value= "cardiac_electrophysiologist"required> Cardiac electrophysiologist</option>
                  <option value="Surgeon"required>Surgeon </option></select> <br /><br />
                <label for="qualification"><b>Qualification:</b><br /></label><br /><input type="text"placeholder="Enter Your Designation"class="form-control" size="50" name="qualification"required><br />
                
<br/><label for="password" style="font-size:16px"><i class="fa fa-key icon"></i>  Create New Password:</label><input type = "password"placeholder="Create Your password" name="password"required>  <p style="font-size:16px"> <br/><br/>password should be more than 8 characters long </p>
<br/><br/><input type ="submit" class="btn btn-danger text-uppercase focus" name="submit" value="register"> 
</div>
 <p> <strong> Already A Member? <a href="joinus.php">Login</a> or <a href="home2.php">sign out</a></strong></p>
 </div>

<?php
if(isset($error_msg)){echo $error_msg;}
if(isset($success_msg)){echo $success_msg;}
	
?>
	 
</form></div>
					
					
</body>
</html>