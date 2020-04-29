<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$pname = $_POST['pname'];
		
		
		$sql = "UPDATE party SET pname = '$pname' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Party updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: party.php');

?>