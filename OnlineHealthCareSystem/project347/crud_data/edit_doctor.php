<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
        $number= $_POST['number'];
        $date = $_POST['date'];
        $age = $_POST['age'];
		$address = $_POST['address'];
        $specialist = $_POST['specialist'];
        $qualification = $_POST['qualification'];
        $password = $_POST['password'];
		$sql = "UPDATE onlinehealthcare_form_doctor SET name = '$name', email= '$email', number= '$number',date= '$date', age= '$age',  address = '$address' ,specialist = '$specialist' ,qualification = '$qualification' , password= '$password'WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Register updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating register';
		}
	}
	else{
		$_SESSION['error'] = 'Select register to edit first';
	}

	header('location: index_doctor.php');

?>