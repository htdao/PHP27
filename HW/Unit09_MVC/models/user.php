<?php 
	include_once('connection.php');
	class User{
		var $connection;

		function __construct(){
			$conn = new Connection();
			$this->connection = $conn->connection;
		}

		function all(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM users";

		    $users = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$users[] = $row;
		    }

		    return $users;
		}

		function find($id){
			$query = "SELECT * FROM users WHERE id= ".$id;

			return $this->connection->query($query)->fetch_assoc();

			// return $result->fetch_assoc();
			// 
			// echo $query;
		}
	}

	$user = new User();
	$users = $user->all();

	// echo "<pre>";
	// 	print_r($users);
	// echo "</pre>";
	
 ?>