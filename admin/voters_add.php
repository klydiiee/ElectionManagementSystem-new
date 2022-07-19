<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$year_level = $_POST['year_level'];
		$department = $_POST['department'];
		$email = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		

		$sql = "INSERT INTO voters (student_id, password, firstname, lastname, year_level, department, email, photo) VALUES ('$student_id', '$password', '$firstname', '$lastname', '$year_level', '$department', '$email', '$filename')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'User added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

		$sql2 = "INSERT INTO user (student_id, email, password) VALUES ('$student_id', '$email', '$student_id')";
		
		

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>