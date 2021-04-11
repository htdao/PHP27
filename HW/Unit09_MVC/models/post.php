<?php 
	include_once('connection.php');
	class Post{
		var $connection;

		function __construct(){
			$conn = new Connection();
			$this->connection = $conn->connection;
		}

		function all(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM posts";

		    $posts = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$posts[] = $row;
		    }

		    return $posts;
		}

		function find($id){
			$query = "SELECT * FROM posts WHERE id= ".$id;

			return $this->connection->query($query)->fetch_assoc();

			// return $result->fetch_assoc();
			// 
			// echo $query;
		}
	}

	$post = new Post();
	$posts = $post->all();

	// echo "<pre>";
	// 	print_r($categories);
	// echo "</pre>";
	
 ?>