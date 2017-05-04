<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload file</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php

if(isset($_POST['upload'])){
	$file = $_FILES['hinhanh'];
	print_r($file);
}

?>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="hinhanh">
		<input type="submit" name="upload" value="Gửi ảnh">
	</form>
</body>
</html>