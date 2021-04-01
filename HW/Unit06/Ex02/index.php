<?php  

	// Thong so ket noi CSDL
	require_once('connection.php');

	// Câu lệnh truy vấn
	$query = "SELECT * FROM posts";

	// Thực thi câu lệnh
	$result = $conn->query($query);

	// Tạo 1 mảng để chứa dữ liệu
	$posts = array();

	while($row = $result->fetch_assoc()) { 
		$posts[] = $row;
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="add.php" class="btn btn-primary">Add New Post</a>
        <?php 
                if (isset($_COOKIE['cate_edit_true'])) {
             ?>
                <div class="alert alert-success">
                    <strong>Thông báo!</strong> Cập nhật thành công!
                </div>
        <?php } ?>
        <?php 
                if (isset($_COOKIE['cate_add_true'])) {
             ?>
                <div class="alert alert-success">
                    <strong>Thông báo!</strong> Thêm thành công!
                </div>
        <?php } ?>
        <?php 
                if (isset($_COOKIE['cate_delete_true'])) {
             ?>
                <div class="alert alert-success">
                    <strong>Thông báo!</strong> Xóa thành công!
                </div>
        <?php } ?>
        <?php 
                if (isset($_COOKIE['cate_delete_false'])) {
             ?>
                <div class="alert alert-danger">
                    <strong>Thông báo!</strong> Xóa thất bại!
                </div>
        <?php } ?>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <!-- <th>Description</th> -->
                <th>view</th>
                <th>Action</th>
            <?php 
            	foreach ($posts as $post) {
        
             ?>
            <tr>
                <td><?= $post['id'] ?></td>
                <td><?= $post['title'] ?></td>
                <td>
                    <img src="<?= $post['thumbnail'] ?>" width="100px" height="100px">
                </td>
                <!-- <td><?= $post['description'] ?></td> -->
                <td><?= $post['view_count'] ?></td>
                <td>
                    <a href="detail.php?id=<?= $post['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="edit.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
            </thead>
        </table>
    </div>
</body>
</html>