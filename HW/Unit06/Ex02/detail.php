<?php
	require_once('connection.php');
	$id = $_GET['id'];

	// Viết câu lệnh để thêm dữ liệu
    $query = "SELECT * from posts WHERE id = ". $id;

	// Thực thi câu lệnh
    $result = $conn->query($query);

    // Trả về 1 bản ghi
    $posts = $result->fetch_assoc();

    // if ($posts['parent_id']=="") {
    // 	$posts['parent_id']="Danh mục cha";
    // }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="container">
 		<h1 class="text-center">Details</h1>
 		<a href="index.php" class="btn btn-primary">Back to posts</a>
 		<div class="container" style="width: 65%" >
 			<p><b>ID</b>: <?= $posts['id'] ?></p>
 		 	<p><b>Title</b>: <?= $posts['title'] ?></p>
 		 	<p><b>Description</b>: <?= $posts['description'] ?></p>
            <p><b>Slug</b>: <?= $posts['slug'] ?></p>
            <p><b>Content</b>: <?= $posts['content'] ?></p>
            <p><b>View</b>: <?= $posts['view_count'] ?></p>
            <p><b>UserID</b>: <?= $posts['user_id'] ?></p>
            <p><b>CategoryID</b>: <?= $posts['category_id'] ?></p>
 		 	<p><b>CreatedAt</b>: <?php echo $posts['created_at']; ?></p>
 		 	<div class="row">
 		 		<p class="col-2"><b>Thumbnail</b>:</p>
 		 		<img class="col-10" style="height: 300px; width: 200px" src="<?= $posts['thumbnail'] ?>">
 		 	</div>
 		</div>
 	</div>
 </body>
 </html>