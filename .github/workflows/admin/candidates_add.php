<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$fullname = $_POST['fullname'];
		
		$party = $_POST['party'];
		$type = $_POST['type'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		$namapencadang = $_POST['namapencadang'];
		$namapenyokong = $_POST['namapenyokong'];

		$sql = "INSERT INTO candidates (pid, fullname,  photo, type, namapencadang, namapenyokong) VALUES ('$party', '$fullname', '$filename', '$type', '$namapencadang', '$namapenyokong')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: candidates.php');
?>
