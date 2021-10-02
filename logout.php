<?php
	
	session_start();
	session_destroy();
	header("location:/storemyresults/index.php");
	echo "<script>alert('Logged out successfully')</script>";
	exit();
?>