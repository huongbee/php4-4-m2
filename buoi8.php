<?php

// $a = 2;
// $b = 1;
// echo $a<$b?$b:$a;
// if( $a > $b){
// 	echo $a;
// }
// else{
// 	echo $b;
// }

// $so = 1;
// $chuoi = "1";

// if($so != $chuoi){
// 	echo $so.' khác '.$chuoi;
// }
// else{
// 	echo "hai số bằng nhau";
// }


if(isset($_GET['tinh'])){
	$canh_a = $_GET['canh_a'];
	$canh_b = $_GET['canh_b'];
	$canh_c = $_GET['canh_c'];

	if(!is_numeric($_GET['canh_a']) || !is_numeric($_GET['canh_b']) || !is_numeric($_GET['canh_c'])){
		echo "Vui lòng nhập số";
	}
	else{
		if(($canh_a + $canh_b) > $canh_c && ($canh_a + $canh_c) > $canh_b && ($canh_c + $canh_b) > $canh_a){
			echo "Đây là 3 cạnh của một tam giác. ";


			if($canh_a == $canh_b || $canh_a == $canh_c || $canh_b == $canh_c){
				if($canh_a == $canh_b && $canh_a == $canh_c){
					echo "Đây là tam giác đều";
				}
				else{
					echo "Đây là tam giác cân";
				}
			}
			
			elseif((pow($canh_a,2)+pow($canh_b,2))==pow($canh_c,2) || (pow($canh_a,2)+pow($canh_c,2))==pow($canh_b,2) || (pow($canh_c,2)+pow($canh_b,2))==pow($canh_a,2)){
				echo "Đây là tam giác vuông";
			}
			else{
				echo "Đây là tam giác thường";
			}
		}

	}
}



?>

<?php
$_can = array(
			4 =>"Giáp" ,
			5=>'Ất',
			6=>"Bính",
			7=>"Đinh",
			8=>"Mậu",
			9=>"Kỷ",
			0=>"Canh",
			1=>"Tân",
			2=>"Nhâm",
			3=>"Quí"
		);
$_chi = array(
			4 => "Tí" ,
			5 =>'Sửu',
			6 =>"Dần",
			7 =>"Mẹo",
			8 =>"Thìn",
			9 =>"Tỵ",
			10 =>"Ngọ",
			11 =>"Mùi",
			0 =>"Thân",
			1 =>"Dậu",
			2 =>"Tuất",
			3 =>"Hợi"
		);
	$duonglich = 217;

	$can=$duonglich%10;

	$chi=$duonglich%12;

	echo $_can[$can].' '.$_chi[$chi];
	
$nam = 2000;
$can = '';
$chi = '';
switch($nam%10){
	case 0: $can ="canh";break;
	case 1: $can ="tân";break;
	case 2: $can ="nhâm";break;
	case 3: $can ="quí";break;
	case 4: $can ="giáp";break;
	case 5: $can ="ất";break;
	case 6: $can ="bính";break;
	case 7: $can ="đinh";break;
	case 8: $can ="mậu";break;
	case 9: $can ="kỉ";break;
}
switch($nam%12){
	case 0: $chi ="thân";break;
	case 1: $chi ="dậu";break;
	case 2: $chi ="tuất";break;
	case 3: $chi ="hợi";break;
	case 4: $chi ="tí";break;
	case 5: $chi ="sửu";break;
	case 6: $chi ="dần";break;
	case 7: $chi ="mẹo";break;
	case 8: $chi ="thìn";break;
	case 9: $chi ="tị";break;
	case 10: $chi ="ngọ";break;
	case 11: $chi ="mùi";break;
}
echo $can . $chi;
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form>
		<input type="text" name="canh_a" placeholder="Cạnh a" required value="<?php if(isset($_GET['canh_a'])){echo $_GET['canh_a'];}?>">
		<br><br>
		<input type="text" name="canh_b" placeholder="Cạnh b" required value="<?= @$_GET['canh_b']?>">
		<br><br>
		<input type="text" name="canh_c" placeholder="Cạnh c" required value="<?php echo (isset($_GET['canh_c'])?$_GET['canh_c']:'');?>">
		<br><br>
		<button name="tinh">Kiểm tra</button>
	</form>
</body>
</html>
