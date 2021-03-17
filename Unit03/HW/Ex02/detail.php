

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
 			session_start();
 			$arr = $_SESSION['info'];
 		// 	echo "<pre>";
			// 	print_r($arr);
			// echo "</pre>";
 			for ($i=0; $i < count($arr) ; $i++) { 
 				if ($arr[$i]['id']==$_GET['id']) {
	 				echo 'Mã Sinh Viên: '.$arr[$i]['id'].'<br>';
				   	echo 'Họ Tên: '.$arr[$i]['name'].'<br>';
				   	echo 'Số Điện Thoại: '.$arr[$i]['phone'].'<br>';
				   	echo 'Email: '.$arr[$i]['email'].'<br>';
				   	echo 'Mật Khẩu: '.$arr[$i]['pwd'].'<br>';
				   	echo 'Giới tính: '.$arr[$i]['gt'].'<br>';
				   	echo 'Địa Chỉ: '.$arr[$i]['addr'].'<br>';
	 			}
 			}
 		?>
 	</div>
 </body>
 </html>

