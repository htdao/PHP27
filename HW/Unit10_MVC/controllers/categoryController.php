<?php 
	require_once('models/category.php');
	class CategoryController{
		public $model;
		function __construct(){
			$this->model = new Category();
		}

		function list(){
			$categories = $this->model->all();

			// print_r($categories);
			require('views/category/list.php');
		}

		public function detail(){
			$id = $_GET['id'];
			$category = $this->model->find($id);

			// print_r($category);
			require('views/category/detail.php');
		}


		public function create(){
			$parents = $this->model->parents();
			// $category = $this->model->add();
			require('views/category/add.php');
		}

		public function store(){
			$data = $_POST;
			// echo "test";
			// var_dump($data);
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success_true',1,time()+3);
			}else{
				setcookie('success_false',1,time()+3);
			}
			header("Location: index.php?mod=category&act=list");
		}

		public function edit(){
			$id = $_GET['id'];
			$category = $this->model->find($id);
			require('views/category/edit.php');
		}

		public function update(){
			$data = $_POST;
			$success = $this->model->update($data);
			if ($success) {
				setcookie('update_true',1,time()+3);
			}else{
				setcookie('update_false',1,time()+3);
			}
			// echo $data;
			header("Location: index.php?mod=category&act=list");
		}

		public function destroy(){
			$id = $_GET['id'];
			$this->model = new Category();
			$success = $this->model->delete($id);
			if ($success) {
				setcookie('destroy_true',1,time()+3);
			}else{
				setcookie('destroy_false',1,time()+3);
			}
			header("Location: index.php?mod=category&act=list");
		}
	}
 ?>