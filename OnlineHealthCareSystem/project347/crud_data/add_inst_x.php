<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$instruction = $_POST['instruction'];
		
		$sql = "INSERT INTO add_instruction (instruction) VALUES ('$instruction')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Instruction added successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>