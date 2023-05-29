<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$bp = $_POST['bp'];
		$bt = $_POST['bt'];
		$pulse = $_POST['pulse'];
		$sql = "UPDATE add_status SET bp = '$bp', bt = '$bt', pulse = '$pulse' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Status updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating status';
		}
	}
	else{
		$_SESSION['error'] = 'Select status to edit first';
	}

	header('location: index.php');

?>