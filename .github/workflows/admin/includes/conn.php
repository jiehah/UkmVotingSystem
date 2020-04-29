<?php
	$conn = new mysqli('lrgs.ftsm.ukm.my', 'ukmes', 'ukmes', 'ukmes');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>