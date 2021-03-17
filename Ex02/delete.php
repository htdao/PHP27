<?php
	session_start(); 
	$arr = $_SESSION['info'];
 		// 	echo "<pre>";
		// 	print_r($arr);
		// echo "</pre>";
 		for ($i=0; $i < count($arr) ; $i++) { 
 			if ($arr[$i]['id']==$_GET['id']) {
	 			unset($_SESSION['info'][$i]);
	 			setcookie('delete-status',1,time()+5);
	 			header('Location: list.php');
	 		}
 		}
 ?>