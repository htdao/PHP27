<?php 
	require_once('models/user.php');
	class UserController{
		public $model;
		function __construct(){
			$this->model = new User();
		}

		function list(){
			$users = $this->model->all();

			// print_r($categories);
			require('views/user/list.php');
		}

		public function detail(){
			$id = $_GET['id'];
			$user = $this->model->find($id);

			// print_r($category);
			require('views/user/detail.php');
		}


		public function create(){
			// $parents = $this->model->parents();
			// $category = $this->model->add();
			require('views/user/add.php');
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
			header("Location: index.php?mod=user&act=list");
		}

		public function edit(){
			$id = $_GET['id'];
			$users = $this->model->find($id);
			require('views/user/edit.php');
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
			header("Location: index.php?mod=user&act=list");
		}

		public function destroy(){
			$id = $_GET['id'];
			$success = $this->model->delete($id);
			if ($success) {
				setcookie('destroy_true',1,time()+3);
			}else{
				setcookie('destroy_false',1,time()+3);
			}
			header("Location: index.php?mod=user&act=list");
		}
	}
 ?>