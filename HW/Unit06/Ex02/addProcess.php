<?php 
	require_once('connection.php');

	// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

	// Viết câu lệnh để thêm dữ liệu
    $query = "INSERT INTO posts (title, description, thumbnail,content, slug, view_count, user_id, category_id, created_at) VALUES ('".$data['title']."','".$data['descripton']."','".$data['thumbnail']."','".$data['slug']."','".$data['content']."','".$data['view_count']."','".$data['user_id']."','".$data['category_id']."','".$data['created_at']."')";

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