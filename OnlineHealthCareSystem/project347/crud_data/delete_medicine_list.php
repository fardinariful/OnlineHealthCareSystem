<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM medicine_list WHERE id = '".$_GET['id']."'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Medicine deleted successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in deleting medicine';
		}
	}
	else{
		$_SESSION['error'] = 'Select medicine to delete first';
	}

	header('location: index.php');
?>