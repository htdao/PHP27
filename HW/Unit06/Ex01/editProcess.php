<?php 
	$data = $_POST;

	require_once('connection.php');

	$query = "UPDATE categories SET name='".$data['name']."' ,parent_id='".$data['parent_id']."' ,thumbnail='".$data['thumbnail']."' ,slug='".$data['slug']."' ,description='".$data['description']."' ,created_at='".$data['created_at']."' WHERE  id = ".$data['id'];

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