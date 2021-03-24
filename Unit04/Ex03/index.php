<?php 
	require('data.php');
	require('upLoadProcess.php');
	session_start();
	if (!isset($_SESSION['documents'][])) {
		$_SESSION['documents'][] = $data;
	}
	// array_push($_SESSION["name"]["file_name"], var $file);
	$documents = $_SESSION['documents'][]
	// echo "<pre>";
	// 	print_r($arr);
	// echo "</pre>";
	// session_destroy();
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
		<h3 class="text-center" style="padding: 20px">Documents</h3>
		<a href="upload.php" class="btn btn-primary" role="button">Upload Document</a>
		<table class="table">
		  <thead>
		    <tr>
		      <th>No</th>
		      <th>Name</th>
		      <th>Downloads</th>
		      <th>#</th>
		    </tr>
		  </thead>
		  <tbody>
		  	 <?php foreach($documents as $key=> $document){ ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $document['name'] ?></td>
                <td><a class="btn btn-primary" href="documents/<?= $document['file_name'] ?>">Download</a></td>
                <td><a class="btn btn-danger" href="remove.php?id=<?=$key?>">Remove</a></td>
            </tr>
        <?php } ?>
		  </tbody>
		</table>
	</div>
</body>
</html>