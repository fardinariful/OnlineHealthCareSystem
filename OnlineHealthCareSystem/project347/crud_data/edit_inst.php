<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$instruction = $_POST['instruction'];
		
		$sql = "UPDATE add_instruction SET instruction = '$instruction' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Instruction updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating instruction';
		}
	}
	else{
		$_SESSION['error'] = 'Select instruction to edit first';
	}

	header('location: index.php');

?>