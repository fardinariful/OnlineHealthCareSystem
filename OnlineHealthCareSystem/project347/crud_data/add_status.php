<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$bp = $_POST['bp'];
		$bt = $_POST['bt'];
		$pulse = $_POST['pulse'];
		$sql = "INSERT INTO add_status (bp, bt, pulse) VALUES ('$bp', '$bt', '$pulse')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'status added successfully';
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