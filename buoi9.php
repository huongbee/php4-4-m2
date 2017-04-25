<?php

// for($i=1;$i<=10;$i++){
// 	echo $i.' ';
// }
$mang = array(3,4,5,6,7);
for($i=0;$i<count($mang);$i++){
	echo $mang[$i].' ';
}

foreach($mang as $value){
	echo $value.' ';
}


$n = 1;
$tong = 0;

// while($n<10){
// 	$tong+=$n;
// 	$n++;
// }
// echo $tong;



do{
	$tong+=$n;
	$n++;
}
while($n<10);
echo $tong;


$nam = 2016;

switch($nam%10){
	case 4: $can="Giáp";break;
	case 5: $can="Ất";break;
	case 6: $can="Bính";break;
	case 7: $can="Đinh";break;
	case 8: $can="Mậu";break;
	case 9: $can="Kỉ";break;
	case 0: $can="Canh";break;
	case 1: $can="Tân";break;
	case 2: $can="Nhâm";break;
	case 3: $can="Quí";break;
}
switch($nam%12){
	case 4: $chi="Tí";break;
	case 5: $chi="Sửu";break;
	case 6: $chi="Dần";break;
	case 7: $chi="Mẹo";break;
	case 8: $chi="Thìn";break;
	case 9: $chi="Tỵ";break;
	case 10: $chi="Ngọ";break;
	case 11: $chi="Mùi";break;
	case 0: $chi="Thân";break;
	case 1: $chi="Dậu";break;
	case 2: $chi="Tuất";break;
	case 3: $chi="Hợi";break;
}
echo $can.' '.$chi;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bàn cờ</title>
	<link rel="stylesheet" href="">
</head>
<style>
.banco{
	width: 800px;

}
.o_co{
	width: 100px;
	height: 100px;
	float: left;

}
.den{
	background-color: #000;
}
.trang{
	background-color: #fff
}
</style>
<body>
	<div class="banco">
		<?php
		for($i=1;$i<=8;$i++){
			for($x=1;$x<=8;$x++){
				if(($i+$x)%2 == 0){
					echo "<div class='o_co trang'></div>";
				}
				else{
					echo '<div class="o_co den"></div>';
				}
			}
		}

		?>
		
		
	</div>
</body>
</html>