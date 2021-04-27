<?php 
	
	require_once('models/Post.php');
	require_once('models/Client.php');
	require_once('models/Category.php');
	require_once('models/User.php');
	class ClientController{

		public function __construct(){
			$this->model = new Post();
			$this->modelUser = new User();

		}

		public function client(){
			$id=$_SESSION['auth']['id'];
			$modelClient = new Client();
			$userPost = $modelClient->userPost($id);

			$sumPost=0;
			$sumView=0;

			$i=0;
			foreach ($userPost as $value) {
				$sumPost += 1;
				$sumView += $value['view_count'];
				$i++;
			} 


			$cate = new Category();
			$cate_id = $cate->all();

			require_once("views/client/client.php");
		}

		public function profile(){
			$id = $_SESSION['auth']['id'];
			$user = $this->modelUser->find($id);

			require_once("views/client/profile.php");

		}

		public function updateUser(){
			$data = $_POST;
			$data['password'] = md5($data['password']);
		    $target_dir = "public/images/userImg/";  // thư mục chứa file upload

		    $target_file = $target_dir . basename($_FILES["avatar"]["name"]); // link sẽ upload file lên
		        
		    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		        // echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";
		        $arr = array(
		        	'avatar'=> $_FILES["avatar"]["name"]
		        );
		        $data = array_merge($data,$arr);
		    } else { // Upload file có lỗi 
		        echo "Sorry, there was an error uploading your file.";
		    }

			$success = $this->modelUser->update($data);
			if ($success) {
				setcookie('update_true',1,time()+3);
			}else{
				setcookie('update_false',1,time()+3);
			}
			// echo $data;
			// var_dump($data);
			header("Location: index.php?mod=client&act=profile&admin=client");
		}

		public function edit(){
			$id = $_GET['id'];
			$post = $this->model->find($id);
		
			require('views/client/edit.php');
		}

		public function update(){
			$data = $_POST;
			$target_dir = "public/images/postImg/";  // thư mục chứa file upload

		    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
		        
		    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		        // echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";
		        $arr = array(
		        	'thumbnail'=> $_FILES["thumbnail"]["name"]
		        );
		        $data = array_merge($data,$arr);
		    } else { // Upload file có lỗi 
		        echo "Sorry, there was an error uploading your file.";
		    }
			$success = $this->model->update($data);
			if ($success) {
				setcookie('update_true',1,time()+3);
			}else{
				setcookie('update_false',1,time()+3);
			}
			// echo $data;
			header("Location: index.php?mod=client&act=client&admin=client");
		}

		public function create(){
			// $parents = $this->model->parents();
			// $category = $this->model->add();
			$cate_model = new Category();
			$categories = $cate_model->all();

			$user_model = new User();
			$users = $user_model->all();

			require('views/client/client.php');
		}

		public function store(){
			$data = $_POST;
			// $data['user_id'] = $_SESSION['auth']['user_id'];
			$target_dir = "public/images/postImg/";  // thư mục chứa file upload

		    $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
		        
		    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
		        // echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";
		        $arr = array(
		        	'thumbnail'=> $_FILES["thumbnail"]["name"]
		        );
		        $data = array_merge($data,$arr);
		        // die();
		    } else { // Upload file có lỗi 
		        echo "Sorry, there was an error uploading your file.";
		    }
			// echo "test";
			// var_dump($data);
			$success = $this->model->create_post($data);
			if ($success) {
				setcookie('success_true',1,time()+3);
			}else{
				setcookie('success_false',1,time()+3);
			}
			header("Location: index.php?mod=client&act=client&admin=client");
		}

		public function destroy(){
			$id = $_GET['id'];
			$success = $this->model->delete($id);
			if ($success) {
				setcookie('destroy_true',1,time()+3);
			}else{
				setcookie('destroy_false',1,time()+3);
			}
			header("Location: index.php?mod=client&act=client&admin=client");
		}
	}
 ?>