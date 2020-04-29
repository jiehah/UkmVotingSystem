<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['photos']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photos']['tmp_name'], '../images/'.$filename);	
		}
		
		$sql = "UPDATE party SET photos = '$filename' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Flag updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select party to update flag first';
	}

	header('location: party.php');
?>