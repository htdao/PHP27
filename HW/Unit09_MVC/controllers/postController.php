<?php 
	require_once('models/post.php');
	class PostController{
		var $model;
		function __construct(){
			$this->model = new Post();
		}

		function list(){
			$posts = $this->model->all();

			// print_r($categories);
			require('views/post/list.php');
		}

		function detail(){
			$id = $_GET['id'];
			$post = $this->model->find($id);

			// print_r($category);
			require('views/post/detail.php');
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