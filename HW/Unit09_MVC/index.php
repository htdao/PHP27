<?php 
	$mod = ''; // module: category, post, user
	$act = ''; // action: list, add, edit

	$mod = (isset($_GET['mod'])?$_GET['mod']:'home');
	$act = (isset($_GET['act'])?$_GET['act']:'error');

	switch ($mod) {
		case 'category':
			require_once('controllers/categoryController.php');
			$controller = new CategoryController();
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'detail':
					$controller->detail();
					break;
				case 'add':
					$controller->add();
					break;
				case 'edit':
					$controller->edit();
					break;
				
				default:
					# code...
					break;
			}
			break;
		case 'post':
			require_once('controllers/postController.php');
			$controller = new PostController();
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'detail':
					$controller->detail();
					break;
				case 'add':
					$controller->add();
					break;
				case 'edit':
					$controller->edit();
					break;
				
				default:
					# code...
					break;
			}
			break;
		case 'user':
			require_once('controllers/userController.php');
			$controller = new UserController();
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'detail':
					$controller->detail();
					break;
				case 'add':
					$controller->add();
					break;
				case 'edit':
					$controller->edit();
					break;
				
				default:
					# code...
					break;
			}
			break;
		
		default:
			echo "Home";
			break;
	}

 ?>
