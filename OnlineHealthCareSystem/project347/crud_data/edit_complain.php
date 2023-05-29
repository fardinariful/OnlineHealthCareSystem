<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$complain = $_POST['complain'];
		
		$sql = "UPDATE add_complain SET complain = '$complain' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'complain updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating complain';
		}
	}
	else{
		$_SESSION['error'] = 'Select complain to edit first';
	}

	header('location: index.php');

?>