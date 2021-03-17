<?php 
	session_start();
	if(isset($_POST['user'])){
		$user = $_POST['user'];
	}

	if(isset($_POST['pwd'])){
		$pwd = $_POST['pwd'];
	}	

	if($user=='admin' && $pwd == '123'){
		$_SESSION['is_login'] = 1;
		header('Location: admin.php');
	}else{
		setcookie('login_failse_status',1,time()+5);
		header('Location: index.php');
	}
	
?>