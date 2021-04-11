<?php 
	include_once('connection.php');
	class Category{
		var $connection;

		function __construct(){
			$conn = new Connection();
			$this->connection = $conn->connection;
		}

		function all(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM categories";

		    $categories = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$categories[] = $row;
		    }

		    return $categories;
		}

		function find($id){
			$query = "SELECT * FROM categories WHERE id= ".$id;

			return $this->connection->query($query)->fetch_assoc();

			// return $result->fetch_assoc();
			// 
			// echo $query;
		}
	}

	$category = new Category();
	$categories = $category->all();

	// echo "<pre>";
	// 	print_r($categories);
	// echo "</pre>";
	
 ?>