<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
        $number = $_POST['number'];
        $date = $_POST['date'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
		$address = $_POST['address'];
        $specialist = $_POST['specialist'];
        $qualification = $_POST['qualification'];
        $password = $_POST['password'];
		$sql = "INSERT INTO `onlinehealthcare_form_doctor` (`id`, `name`, `email`, `number`, `date`, `age`, `gender`, `address`,`specialist`,`qualification`, `password`) VALUES ('$id', '$name', '$email', '$number', '$date', '$age', '$gender', '$address','$secialist','$qualification', '$password')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Doctor added successfully';
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