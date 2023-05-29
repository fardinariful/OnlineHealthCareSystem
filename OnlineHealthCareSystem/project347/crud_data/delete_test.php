<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM add_test WHERE id = '".$_GET['id']."'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Test deleted successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in deleting test';
		}
	}
	else{
		$_SESSION['error'] = 'Select test to delete first';
	}

	header('location: index.php');
?>