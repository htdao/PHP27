<?php 
	session_start();
	if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['addr'])) {

		$_SESSION[$_POST['id']] = array(
			'id' => $_POST['id'],
			'name' => $_POST['name'],
			'phone' => $_POST['phone'],
			'email' => $_POST['email'],
			'gt' => $_POST['gt'],
			'pwd' => $_POST['pwd'],
			'addr' => $_POST['addr']
		);

		// echo "<pre>";
		// 	print_r($_SESSION[$_POST['id']]);
		// echo "</pre>";
		if (!isset($_SESSION['info'])) {
			$_SESSION['info']=array();
		}else{
			array_push($_SESSION['info'], $_SESSION[$_POST['id']]);

		}
		// echo "<pre>";
		// 	print_r($_SESSION['info']);
		// echo "</pre>";

		$_SESSION['check_true'] = 1;

		setcookie('add-status',1,time()+5);

		header('Location: list.php');
	}else{
		setcookie('check_failes',1,time()+5);
		header('Location: add.php');
	}
 ?>