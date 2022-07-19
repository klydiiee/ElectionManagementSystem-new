<?php
	include 'includes/session.php';

	if(isset($_POST['create_election'])){
		$startDate = $_POST['startDate'];
		$endDate = $_POST['endDate'];
		$election_name = $_POST['election_name'];
	
echo "$startDate";
		$sql = "INSERT INTO election (startDate,endDate, election_name) VALUES ('$startDate', '$endDate', '$election_name')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Created Election successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: home.php');
?>