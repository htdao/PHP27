<?php 
	session_start();
	if(isset($_POST['submit'])){
		$target_dir = "documents/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["document"]["name"]); // link sẽ upload file lên
       
        if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "The file ". basename( $_FILES["document"]["name"]). " has been uploaded.";
            $doc_info = array(
                'name' => $_POST['name'],
                'file_name' => basename( $_FILES["document"]["name"])

            );
            $_SESSION['documents'][] = $doc_info;
            header('Location: index.php');
        } else { // Upload file có lỗi 
            echo ("Sorry, there was an error uploading your file.");
        }
	}
 ?>