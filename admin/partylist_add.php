<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$partyname = $_POST['partyname'];
		$tagline = $_POST['tagline'];

		$sql = "SELECT * FROM partylist ORDER BY priority DESC LIMIT 1";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		$priority = $row['priority'] + 1;
		
		$sql = "INSERT INTO partylist (partyname, tagline, priority) VALUES ('$partyname', '$tagline', '$priority')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Partylist added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: partylist.php');
?>