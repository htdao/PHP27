<?php 
	require_once('models/Post.php');
	require_once("models/Category.php");
	require_once('models/User.php');
	class UserController{
		var $model;
		function __construct(){
			$this->model = new Post();
			$this->modelCategory = new Category();
			$this->modelUser = new User();
		}

		function home(){
			$newPosts = $this->model->newPost();
			$fPost = $this->model->fPost();
			$sPost = $this->model->sPost();
			$heros = $this->model->heros();
			$th = $this->model->find(2);
			$chap = $this->model->find(1);
			$categories = $this->modelCategory->all();
			$posts = $this->model->all();
			$filePost = $this->model->filePost();
			$fileCate = $this->modelCategory->fileCate();


			// var_dump($categories);
			// die();
			require_once("views/home/index.php");
		}

		function post(){

			$fPost = $this->model->fPost();
			$tPost = $this->model->tPost();
			$sPost = $this->model->sPost();
			$post = $this->model->all();
			$categories = $this->modelCategory->all();
			// var_dump($fPost);
			// die();
			require_once("views/home/index_2.php");
		}
		function category(){

			$categories = $this->modelCategory->all();
			require_once("views/home/index_3.php");
		}
		function contact(){

			
			require_once("views/home/contact.php");
		}
		function detail(){
			$id = $_GET['id'];
			$detail = $this->model->find($id);
			// var_dump($detail);
			require_once("views/home/detail.php");
		}

		function detailCate(){
			$id = $_GET['id'];
			$postCate = $this->modelUser->detailCate($id);
			// var_dump($detail);
			require_once("views/home/detailCate.php");
		}


	}
 ?>