<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$pname = $_POST['pname'];
		$filename = $_FILES['photos']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photos']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "SELECT * FROM party ORDER BY priority DESC LIMIT 1";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		$priority = $row['priority'] + 1;
		
		$sql = "INSERT INTO party (pname, priority, photos) VALUES ('$pname', '$priority', '$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Party added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: party.php');
?>