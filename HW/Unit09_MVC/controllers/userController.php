<?php 
	require_once('models/user.php');
	class UserController{
		var $model;
		function __construct(){
			$this->model = new User();
		}

		function list(){
			$users = $this->model->all();

			// print_r($categories);
			require('views/user/list.php');
		}

		function detail(){
			$id = $_GET['id'];
			$user = $this->model->find($id);

			// print_r($category);
			require('views/user/detail.php');
		}


		function add(){
			echo "add category";
		}

		function addProcess(){
			echo "add process category";
		}

		function edit(){
			echo "edit category";
		}

		function delete(){
			echo "delete category";
		}
	}
 ?>