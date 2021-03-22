<?php 
	require('data.php');

	session_start();

	$code = $_GET['code'];

	if (isset($_SESSION['cart'][$code])) {
		$_SESSION['cart'][$code][3]++;
	}else{
		$product = $products[$code];

		$product[3] = 1;

		$_SESSION['cart'][$code] = $product;
	}
	header('Location: cart.php');

 ?>