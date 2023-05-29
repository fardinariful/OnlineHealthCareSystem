<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$doctors_name = $_POST['doctors_name'];
		$appoinment_date = $_POST['appoinment_date'];
		$appoinment_time = $_POST['appoinment_time'];
        $patients_name = $_POST['patients_name'];
		$sql = "UPDATE appoinment SET  doctors_name= '$doctors_name', appoinment_date = '$appoinment_date', appoinment_time = '$appoinment_time', patients_name = '$patients_name'  WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Appoinment updated successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating appoinment';
		}
	}
	else{
		$_SESSION['error'] = 'Select appoinment to edit first';
	}

	header('location: index2.php');

?>