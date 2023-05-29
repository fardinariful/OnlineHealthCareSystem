<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM patient WHERE id = '".$_GET['id']."'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'patient deleted successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in deleting patient';
		}
	}
	else{
		$_SESSION['error'] = 'Select patient to delete first';
	}

	header('location: index.php');
?>