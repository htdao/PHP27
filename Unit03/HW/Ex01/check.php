<?php 
	session_start();
	if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['addr'])) {
		$_SESSION['id'] = $_POST['id'];
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['phone'] = $_POST['phone'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['pwd'] = $_POST['pwd'];
		$_SESSION['gt'] = $_POST['gt'];
		$_SESSION['addr'] = $_POST['addr'];

		$_SESSION['check_true'] = 1;
		header('Location: postt.php');
	}else{
		setcookie('check_failes',1,time()+5);
		header('Location: index.php');
		
	}
 ?>