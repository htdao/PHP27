<?php 
	session_start();

	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";

	$_SESSION['unit'] = 1;
	// $_SESSION['unit1'] = "hihi";

	unset($_SESSION['unit1']);
	
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";
 ?>