<?php 
	session_start();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$data = $_SESSION['product'];
	if (isset($_SESSION['cart'])) {
		if (!isset($_SESSION['cart'][$_GET['id']])) {
			for ($i=0; $i < count($data); $i++) { 
				if ($data[$i]['id'] == $_GET['id']) {
					$_SESSION['cart'][$_GET['id']]=array(
						'id' => $data[$i]['id'],
						'name' => $data[$i]['name'],
						'amount' => 1,
						'price' => $data[$i]['price'],
						'sum' => $data[$i]['price'],
						'date' => date('Y-m-d H:i:s')
					);
				}
			}
		}else{
			$_SESSION['cart'][$_GET['id']]['amount'] += 1;
			$_SESSION['cart'][$_GET['id']]['sum'] = $_SESSION['cart'][$_GET['id']]['amount']*$_SESSION['cart'][$_GET['id']]['price'];
			$_SESSION['cart'][$_GET['id']]['date'] = date('Y-m-d H:i:s');
		}
	}else{
		$_SESSION['cart'] = array();
	}
	header('Location: cart.php')
 ?>
