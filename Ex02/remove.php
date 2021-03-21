<?php 
	session_start();
	$type = $_GET['type'];
	$code = $_GET['code'];
	if ($_SESSION['cart'][$code][3] >1 && $type==0) {
		$_SESSION['cart'][$code][3]--;
	}else{
		unset($_SESSION['cart'][$code]);
	}
	header('Location: cart.php');

 ?>