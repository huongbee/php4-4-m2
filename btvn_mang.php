<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BTVN - Mảng</title>
	<link rel="stylesheet" href="">
</head>
<style>
	.content{
		margin: auto;
		display: block;
		width: 1000px
	}
	.sanpham{
		width: 30%;
		border: 1px solid gray;
		margin: 8px;
		padding: 5px;
		float: left;

	}
	.name{
		text-align: center;
		line-height: 20px;
		font-size: 20px;
		font-weight: bold;
		color: red;
		padding: 10px
	}
	.price{
		text-align: center;
		line-height: 20px;
		font-size: 20px;
		font-weight: bold;
		color: blue
	}
	.sanpham img{
		margin: auto;
		display: block;
	}
</style>

<?php
$mangsp = array(
	"1"=>array("TenSP"=>"IPhone 5","Hinh"=>"iphone5.jpg","Gia"=>3000000),
	"2"=>array("TenSP"=>"IPhone 6","Hinh"=>"iphone6.jpg","Gia"=>4000000),
	"3"=>array("TenSP"=>"IPhone 7","Hinh"=>"iphone7.jpg","Gia"=>5000000),
	"4"=>array("TenSP"=>"IPhone 8","Hinh"=>"iphone8.jpg","Gia"=>6000000),
	"5"=>array("TenSP"=>"IPhone 9","Hinh"=>"iphone9.jpg","Gia"=>7000000),
	"6"=>array("TenSP"=>"IPhone 10","Hinh"=>"iphone9.jpg","Gia"=>8000000)
);



?>

<body>
	<div class="content">
		<?php
		foreach($mangsp as $sanpham){
		?>

		<div class="sanpham">
			<img src="image/<?=$sanpham['Hinh']?>" height="250px">
			<div class="name"><?=$sanpham['TenSP']?></div>
			<div class="price"><?php echo number_format($sanpham['Gia'])?> đồng</div>
		</div>

		<?php
		}

		?>
		
		
	</div>
</body>
</html>