<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$test = $_POST['test'];
		
		$sql = "UPDATE add_test SET test = '$test' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Test updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating test';
		}
	}
	else{
		$_SESSION['error'] = 'Select test to edit first';
	}

	header('location: index.php');

?>