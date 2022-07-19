<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$partyname = $_POST['partyname'];
		$tagline = $_POST['tagline'];

		$sql = "UPDATE partylist SET partyname = '$partyname', tagline = '$tagline' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Patylist updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: partylist.php');

?>