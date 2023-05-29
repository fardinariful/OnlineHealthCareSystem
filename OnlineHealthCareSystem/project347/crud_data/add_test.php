<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$test = $_POST['test'];
		
		$sql = "INSERT INTO add_test (test) VALUES ('$test')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Test added successfully';
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