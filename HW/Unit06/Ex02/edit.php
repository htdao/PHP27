<?php 
	require_once('connection.php');

	$id = $_GET['id'];

	// Viết câu lệnh để thêm dữ liệu
    $query = "SELECT * from posts WHERE id = ". $id;

	// Thực thi câu lệnh
    $result = $conn->query($query);

    // Trả về 1 bản ghi
    $posts = $result->fetch_assoc();
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Edit</h3>
    <hr>
        <?php 
                if (isset($_COOKIE['cate_edit_false'])) {
             ?>
                <div class="alert alert-danger">
                    <strong>Thông báo!</strong> Cập nhật thất bại!
                </div>
        <?php } ?>
        <form action="editProcess.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $posts['id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $posts['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $posts['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $posts['thumbnail'] ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" value="<?= $posts['content'] ?>">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?= $posts['slug'] ?>">
            </div>
            <div class="form-group">
                <label for="">View Count</label>
                <input type="text" class="form-control" id="" placeholder="" name="view_count" value="<?= $posts['view_count'] ?>">
            </div>
            <div class="form-group">
                <label for="">User ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="user_id" value="<?= $posts['user_id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Category ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_id" value="<?= $posts['category_id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Created_at</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?= $posts['created_at'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>