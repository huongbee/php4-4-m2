<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Buổi 11</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
if(isset($_POST['search'])){
	$chuoibandau = $_POST['chuoi'];
	$tucantim = $_POST['tucantim'];

	if($chuoibandau == '' || $tucantim == ''){
		$result = 'Vui lòng nhập đầy đủ thông tin';
	}
	else{
		$vitri = strpos($chuoibandau,$tucantim);
		$result = "Vị trí xuất hiện của từ $tucantim trong chuỗi $chuoibandau là: $vitri";
	}
	
}


?>
	<h2>Bài tập 1</h2>
	<form method="POST">
		<input name="chuoi" placeholder="Nhập chuỗi" value="<?php if(isset($_POST['search'])){echo $_POST['chuoi'];}?>" required>
		<input name="tucantim" placeholder="Nhập từ cần tìm" value="<?php if(isset($_POST['search'])){echo $_POST['tucantim'];}?>">
		<button name="search" type="submit">Tìm</button>
		<br>
		<br>
		Kết quả: <input type="text" value="<?=@$result?>" readonly style="width:400px" >
	</form>
		<br>
		<br>
		<br>
		<h2>Bài tập 3</h2>
	<form method="POST" action="../buoi11/test_action.php">
		<input name="thang" placeholder="Nhập tháng" value="" required>
		<input name="nam" placeholder="Nhập năm" value="" required>
		<button name="xem" type="submit">Xem kết quả</button>
		<br>
		<br>
		Kết quả: <input type="text" value="<?=@$ketqua?>" readonly style="width:400px" >
	</form>
</body>
</html>