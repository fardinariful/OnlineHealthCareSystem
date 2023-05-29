<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$medicine = $_POST['medicine'];
		$dose1 = $_POST['dose1'];
		$dose2 = $_POST['dose2'];
		$dose3 = $_POST['dose3'];
        $duration = $_POST['duration'];
        
		$sql = "UPDATE medicine_list SET dose1 = '$dose1', dose2 = '$dose2', dose3 = '$dose3', duration= '$duration' WHERE medicine = '$medicine'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Medicine updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating medicine';
		}
	}
	else{
		$_SESSION['error'] = 'Select medicine to edit first';
	}

	header('location: index.php');

?>