<?php

// $mang = array("khoa"=>"không",'một','hai',9);

// //var_dump($mang);

// // echo $mang['khoa'];
// $dem = count($mang);

// // for($i=0;$i<$dem;$i++){
// // 	echo $mang[$i].' ';
// // }

// foreach($mang as $key=>$value){
// 	echo $key.' - '.$value.'<br>';
// }
$menu = array('Thời sự','Kinh Doanh','Bóng Đá','Thời trang','Công nghệ',"Giới thiệu",'Liên hệ');


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menu</title>
	<link rel="stylesheet" href="">
</head>
<style>
	
	.phantu{
		width: 120px;
		height: 40px;
		background-color: blue;
		color: #fff;
		float: left;
		text-align: center;
		border-left: 1px solid #fff
	}
	.phantu p{
		margin: 7px
	}
	.phantu:hover{
		background-color: violet;
		color: yellow;
	}
</style>
<body>
	<div class="menu">
	<?php
		foreach($menu as $value){
			echo "<div class='phantu'><p>$value</p></div>";
		}
	?>
		
	</div>
</body>
</html>