<?php 
	require_once('models/category.php');
	class CategoryController{
		var $model;
		function __construct(){
			$this->model = new Category();
		}

		function list(){
			$categories = $this->model->all();

			// print_r($categories);
			require('views/category/list.php');
		}

		function detail(){
			$id = $_GET['id'];
			$category = $this->model->find($id);

			// print_r($category);
			require('views/category/detail.php');
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