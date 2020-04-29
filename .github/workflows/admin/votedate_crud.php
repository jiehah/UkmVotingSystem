<?php
	include 'includes/session.php';

	if(isset($_POST['startdate']) && isset($_POST['enddate'])){
		try{
			
			$rawdate=$_POST['startdate'];
			$release_date = strtotime($rawdate);
			$date=date('c', $release_date);

			$rawdate1=$_POST['enddate'];
			$release_date1=strtotime($rawdate1);
			$date1 = date('c', $release_date1);

			$stmt = $conn->prepare("INSERT INTO votedate (start, end) VALUES ('$date', '$date1')");
			$stmt ->bind_param("ss", $_POST['date'], $_POST['date1']);
			$stmt->execute();
		}
		catch(Exception $e) {
			echo 'Message: ' .$e->getMessage();
		  }
	}
	

	header('location: votedate.php');
?>