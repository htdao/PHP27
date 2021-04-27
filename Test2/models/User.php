<?php 
	require_once('model.php');
	class User extends Model{
		var $table = 'users';

		function newUser(){
			$query = "SELECT * FROM users ORDER BY id DESC LIMIT 4";

		    $users = array();
		    
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$users[] = $row;
		    }
		    return $users;
		}

		function detailCate($id){
			$query = "SELECT p.* FROM posts p JOIN categories c on p.category_id = c.id where category_id =".$id;

		    $postCate= array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$postCate[] = $row;
		    }

		    return $postCate;
		}

	}
 ?>
