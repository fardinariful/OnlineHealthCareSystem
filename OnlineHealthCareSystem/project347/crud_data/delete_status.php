<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM add_status WHERE id = '".$_GET['id']."'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Status deleted successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in deleting status';
		}
	}
	else{
		$_SESSION['error'] = 'Select status to delete first';
	}

	header('location: index.php');
?>