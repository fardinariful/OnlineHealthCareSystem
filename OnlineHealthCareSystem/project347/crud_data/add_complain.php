<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$test = $_POST['complain'];
		
		$sql = "INSERT INTO add_complain (complain) VALUES ('$complain')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'complain added successfully';
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