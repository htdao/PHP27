<?php 
	session_start();
	// echo "<pre>";
	// 	print_r($_SESSION['file']);
	// echo "</pre>"
	if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        
        $target_dir = "uploads/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["file_name"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["file_name"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "The file ". basename( $_FILES["file_name"]["name"]). " has been uploaded.";
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }
    }
   	 // echo $target_file;
    $file = array(
	'name' => $_POST['name'];
	'file_name' => $_POST['file_name'];
	// echo $file;
	);
	array_push($_SESSION["name"]["file_name"],$file);
	header('Location: index.php');
 ?>