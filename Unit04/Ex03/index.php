<?php 
	require('data.php');
	require('upLoadProcess.php');
	session_start();
	if (!isset($_SESSION["name"]["file_name"])) {
		$_["name"]["file_name"] = $data;
	}
	// array_push($_SESSION["name"]["file_name"], var $file);
	$arr = $_SESSION["name"]["file_name"];
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
		  	<?php 
		  		$i=0;
		  		foreach ($arr as $value) {
			  		$i++;
			?>
		     	<tr>
		     		<td><?php echo $i; ?></td>
		     		<td><?php echo $value['name']; ?></td>
		     		<td>
		     			<a href="download.php?code=<?php echo $arr['0']; ?>" class="btn btn-success">Download</a>
		     		</td>	
		     		<td>
		     			<a href="remove.php?code=<?php echo $arr['0']; ?>" class="btn btn-danger">Remove</a>
		     		</td>	
		     	</tr>
		     <?php } ?>
		  </tbody>
		</table>
	</div>
</body>
</html>