<?php 
	require_once('models/post.php');
	require_once('models/user.php');
	require_once('models/category.php');
	class PostController{
		public $model;
		function __construct(){
			$this->model = new Post();
		}

		function list(){
			$posts = $this->model->all();

			// print_r($categories);
			require('views/post/list.php');
		}

		public function detail(){
			$id = $_GET['id'];
			$post = $this->model->find($id);

			// print_r($category);
			require('views/post/detail.php');
		}


		public function create(){
			// $parents = $this->model->parents();
			// $category = $this->model->add();
			$cate_model = new Category();
			$categories = $cate_model->all();

			$user_model = new User();
			$users = $user_model->all();

			require('views/post/add.php');
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
			header("Location: index.php?mod=post&act=list");
		}

		public function edit(){
			$id = $_GET['id'];
			$posts = $this->model->find($id);
			require('views/post/edit.php');
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
			header("Location: index.php?mod=post&act=list");
		}

		public function destroy(){
			$id = $_GET['id'];
			$success = $this->model->delete($id);
			if ($success) {
				setcookie('destroy_true',1,time()+3);
			}else{
				setcookie('destroy_false',1,time()+3);
			}
			header("Location: index.php?mod=post&act=list");
		}
	}
 ?>