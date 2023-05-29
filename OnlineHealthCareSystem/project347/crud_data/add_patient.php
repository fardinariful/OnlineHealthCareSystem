<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$email = $_POST['email'];
		$date = $_POST['date'];
		//$address = $_POST['address'];
		$sql = "INSERT INTO patient (email, date) VALUES ('$email', '$date')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Patient added successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>