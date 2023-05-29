<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$medicine = $_POST['medicine'];
		$dose1 = $_POST['dose1'];
        $dose2 = $_POST['dose2'];
        $dose3 = $_POST['dose3'];
        $duration = $_POST['duration'];
		
		$sql = "INSERT INTO medicine_list (medicine, dose1, dose2, dose3, duration) VALUES ('$medicine', '$dose1',  '$dose2',  '$dose3', '$duration')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Medicine added successfully';
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