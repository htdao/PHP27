<?php 
	require_once('Model.php');
	class Client extends Model{
		// public $model;
		function __construct(){
			// $this->model = new Client();
			parent:: __construct();
		}

		function userPost($id){
			$query = "SELECT * FROM posts WHERE user_id= ".$id;
			$userPost = array();
			return $this->connection->query($query);
			while($row = $result->fetch_assoc()) { 
		    	$userPost[] = $row;
		    }
		    return $userPost;
		}

		// function update($data){
			
		// 	$values = '';
		// 	foreach ($data as $key => $value) {
		// 		$values .=$key."='".$value."',";
		// 	}
		// 	$values = trim($values,',');
		// 	$query = "UPDATE ".$this->table." SET ".$values." WHERE  id = '".$data['id']."'";
		
		// 	return $this->connection->query($query);

		// 	// echo $query;
		// }
		
	}

 ?>