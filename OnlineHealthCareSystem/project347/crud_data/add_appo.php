<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$doctors_name = $_POST['doctors_name'];
		$appoinment_date = $_POST['appoinment_date'];
		$appoinment_time = $_POST['appoinment_time'];
        $patients_name = $_POST['patients_name'];
		$sql = "INSERT INTO appoinment (doctors_name, appoinment_date, appoinment_time,patients_name) VALUES ('$doctors_name', '$appoinment_date', '$appoinment_time', '$patients_name')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Appoinment added successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index2.php');
?>