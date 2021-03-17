<?php 
	session_start();

	$arr = $_SESSION['product'];

	$_SESSION['cart'] = array(
		for ($i=0; $i < count($arr); $i++) { 
			'id' = $arr[$i]['id'];
			'name' = $arr[$i]['name'];
			// 'int' = $arr[$i]['int'];
			'price' = $arr[$i]['price'];
			// 'sum' = $arr[$i]['sum'];
			// 'date' = $arr[$i]['date'];
		}


 ?>