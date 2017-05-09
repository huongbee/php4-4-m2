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

	foreach ($file['size'] as $size) {
		if( $size >	82590){
			echo "File quá lớn";
			die;
		}
	}


	foreach ($file['name'] as $key => $name) {
		//echo $file['tmp_name'][$key].'<br>';
		$vitri = strripos($name,'.');
		$file_ext = substr($name ,$vitri);
		$filename_base = substr($name, 0 ,$vitri);
		move_uploaded_file($file['tmp_name'][$key], "hinh/$filename_base".time().'-'.rand(1,10).$file_ext);
	}
	echo "thành công";






	/*$size = $file['size'];
	echo $size;
	$filename = $file['name'];
	$vitri = strripos($filename,'.');
	$file_ext = substr($filename ,$vitri);
	$filename_base = substr($filename, 0 ,$vitri);
	//.jpg .png .jpeg .gif
	$array = array('.jpg', '.png', '.jpeg', '.gif');
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date=date_create("2013-03-15");
	var_dump($date);
	echo date_format($date,"Y/m/d");
	die;
	if(in_array($file_ext, $array)){
		if($size < 2*1024*1024){
			move_uploaded_file($file['tmp_name'], "hinh/".$filename_base.time().'-'.rand(1,10).$file_ext);
			//a.b.c.s1494077283-2394801.jpg
			echo "upload thành công";
		}
		else{
			echo "File quá lớn";
		}
	}
	else{
		echo "Không được phép chọn file này";
	}*/
	
}

?>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="hinhanh[]" multiple>
		<input type="submit" name="upload" value="Gửi ảnh">
	</form>
</body>
</html>