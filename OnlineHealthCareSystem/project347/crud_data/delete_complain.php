<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM add_complain WHERE id = '".$_GET['id']."'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Complain deleted successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in deleting complain';
		}
	}
	else{
		$_SESSION['error'] = 'Select complain to delete first';
	}

	header('location: index.php');
?>