<?php 
	require_once('connection.php');

	// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

	// Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO categories (name, parent_id, thumbnail, slug, description, created_at) VALUES ('".$data['name']."','".$data['parent_id']."','".$data['thumbnail']."','".$data['slug']."','".$data['description']."','".$data['created_at']."')";

	// Thực thi câu lệnh
    $status = $conn->query($query);

    if ($status==true) {
    	setcookie('cate_add_true',1,time()+5);
    	header('Location: index.php');
    }else{
    	setcookie('cate_add_false',1,time()+5);
    	header('Location: add.php');
    }
 ?>