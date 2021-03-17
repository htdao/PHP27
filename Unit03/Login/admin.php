<?php 
	session_start();
	if(!isset($_SESSION['is_login'])){
		header('Location: index.php');
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h3>Admin Page</h3>
 	<a href="logout.php">Thoát</a>
 </body>
 </html>
 