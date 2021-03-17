<?php 
	$user = $_POST['user'];
   	$pwd = $_POST['pwd'];
	if ($user=='admin' && $pwd == '111111') {
		echo "<br>Đăng nhập thành công!";
	}else{
		echo "<br>Đăng nhập thất bại!";
	}
 ?>