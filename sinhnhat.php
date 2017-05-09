<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sinh nhật</title>
	<link rel="stylesheet" href="">
</head>
<?php

if(isset($_POST['xem'])){
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];;
	$now = time();
	$ngay = mktime(0,0,0,$month,$date,getdate()['year']); 
	$ngay = ($ngay-$now)/86400;
	
	$ngay = (int)$ngay;
	if($ngay<0){
		echo "đã qua sinh nhật ".-(int)$ngay." ngày";
	}
	else{
		echo "còn $ngay ngày nữa đến sinh nhật";
	}
	$tuoi 	= getdate()['year'] - $year; 
	echo "hiện giờ ".$tuoi." tuổi" 	;
}

?>
<body>
	<form method="post">
	<input name="date">
	<input name="month">
	<input name="year">
	<input type="submit" name="xem" value="xem">
	</form>
</body>
</html>