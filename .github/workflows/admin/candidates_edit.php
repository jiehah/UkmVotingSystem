<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
		
		$party = $_POST['party'];
		$type = $_POST['type'];
		$namapencadang = $_POST['namapencadang'];
		$namapenyokong = $_POST['namapenyokong'];

		$sql = "UPDATE candidates SET fullname = '$fullname', pid = '$party', type='$type', namapencadang = '$namapencadang', namapenyokong = '$namapenyokong' WHERE id = '$id'";
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