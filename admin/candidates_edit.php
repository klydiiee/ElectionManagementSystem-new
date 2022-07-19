<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		
		$student_id = $_POST['student_id'];
        $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$position = $_POST['position'];
		$platform = $_POST['platform'];
		$partyname = $_POST['partyname'];

		$sql = "UPDATE candidates SET  student_id = '$student_id',firstname = '$firstname', lastname = '$lastname', position_id = '$position', platform = '$platform', party_id = '$partyname' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: candidates.php');

?>