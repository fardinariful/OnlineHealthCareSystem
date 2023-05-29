<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		
		$sql = "UPDATE patient SET email = '$email', date = '$date' WHERE id = '$id'";

		
		if($conn->query($sql)){
			$_SESSION['success'] = 'Patient updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating patient';
		}
	}
	else{
		$_SESSION['error'] = 'Select patient to edit first';
	}

	header('location: index.php');

?>