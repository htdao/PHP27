
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
 		<h3>Upload Document</h3>
 	 <form action="test.php" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Tên tài liệu</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">File</label>
	    <input type="file" class="form-control" name="file_name" id="file_name" style="height: 43px">
	  </div>
	  <button type="submit" class="btn btn-primary" name="submit">Upload</button>
	</form>
	</div>
 </body>
 </html>