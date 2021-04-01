<?php 
	require_once('connection.php');

	$id = $_GET['id'];

	// Câu lệnh truy vấn
    $query = "DELETE FROM users WHERE id = ".$id;

    // Thực thi câu lệnh
    $result = $conn->query($query); 

    if($result == true){
		setcookie('cate_delete_true',1,time()+5);
		header('Location: index.php');
	}else{
		setcookie('cate_delete_false',1,time()+5);
		header('Location: index.php');
	}

 ?>