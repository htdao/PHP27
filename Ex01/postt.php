<?php 
	session_start();
	if(!isset($_SESSION['check_true'])){
		header('Location: index.php');
	}
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>
 	</title>
 </head>
 <body>
 	<div style="width: 60%; margin: 0 auto">
 		<h1 style="text-align: center;">Thông Tin Sinh Viên</h1>
 		<?php 
			echo 'Mã Sinh Viên: '.$_SESSION['id'].'<br>';
		   	echo 'Họ Tên: '.$_SESSION['name'].'<br>';
		   	echo 'Số Điện Thoại: '.$_SESSION['phone'].'<br>';
		   	echo 'Email: '.$_SESSION['email'].'<br>';
		   	echo 'Mật Khẩu: '.$_SESSION['pwd'].'<br>';
		   	echo 'Giới tính: '.$_SESSION['gt'].'<br>';
		   	echo 'Địa Chỉ: '.$_SESSION['addr'].'<br>';
 		?>
 	</div>
 </body>
 </html>

