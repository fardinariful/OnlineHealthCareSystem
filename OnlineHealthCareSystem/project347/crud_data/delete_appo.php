<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM appoinment WHERE id = '".$_GET['id']."'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'appoinment deleted successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in deleting appoinment';
		}
	}
	else{
		$_SESSION['error'] = 'Select appoinment to delete first';
	}

	header('location: index2.php');
?>