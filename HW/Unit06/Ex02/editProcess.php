<?php 
	$data = $_POST;

	require_once('connection.php');

	$query = "UPDATE posts SET title='".$data['title']."' ,description='".$data['description']."' ,thumbnail='".$data['thumbnail']."' ,slug='".$data['slug']."' ,content='".$data['content']."' ,view_count='".$data['view_count']."' ,user_id='".$data['user_id']."' ,category_id='".$data['category_id']."' ,created_at='".$data['created_at']."' WHERE  id = ".$data['id'];

	$status = $conn->query($query);

    // echo $query;

	 if ($status==true) {
    	setcookie('cate_edit_true',1,time()+5);
    	header('Location: index.php');
    }else{
    	setcookie('cate_edit_false',1,time()+5);
    	header('Location: edit.php');
    }
 ?>