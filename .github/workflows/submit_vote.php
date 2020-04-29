<?php
	include("includes/conn.php");
	session_start();
	session_destroy();
		//$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[um_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		//$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[fpend_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		//$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[fpi_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		//$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[ftsm_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		//$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[fkab_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		//$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[fep_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		//$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[pio_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		//$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[busman_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		//$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[sgtarm_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		//$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[muse_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		//$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[escort_id]', '$_SESSION[voters_id]')") or die(mysql_error());
		$conn->query("UPDATE `voters` SET `status` = 'Voted' WHERE `voters_id` = '$_SESSION[voters_id]'") or die(mysql_error());
		header("location:index.php");
		
?> 