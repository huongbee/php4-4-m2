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