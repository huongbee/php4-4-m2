<?php

// $chuoi = "Chào các bạn";
// $mang = explode(' ',$chuoi);
// print_r($mang);
// $mang = Array("Chào","các","bạn");
// $chuoi = implode('-',$mang);
// echo $chuoi;

// $mang = Array("Chào","các","bạn");
// $mang2 = Array("Chào","cả","lớp");
// // for($i=0; $i<count($mang); $i++){
// // 	if($mang[$i] =="các"){
// // 		$mang[$i] = "cả";
// // 	}
// // 	if($mang[$i] =="bạn"){
// // 		$mang[$i] = "lớp";
// // 	}
// // }
// // $chuoi = implode(' ',$mang);
// // echo $chuoi;


// //echo array_search('bạn',$mang); //2

// $mang3 = array_merge($mang, $mang2);
// print_r($mang3);

// $mang = array('Thời sự','Kinh tế', 'Giáo dục','giải trí','công nghệ');

// array_splice($mang, 2,1, "Bóng đá");

// print_r($mang);

// function chao_ban($name){
// 	return "Chào bạn ".$name;
// }


// $a = chao_ban('Khoa Phạm');
// echo $a;

// function tinh_tong($a,$b=4){
// 	return $a+$b;
// }

// $tong = tinh_tong(2);
// echo $tong;


function test($a){
	return $a;
}

$a = test(NULL);
echo $a;



// function testReturn(?float $param)
// {
//     return $param;
// }
// echo testReturn(5.5); //5.5
// //echo testReturn(null); //null


function swap($a,$b){

	// $t = $a;
	// $a = $b;
	// $b = $t;
	// $a = $a + $b;
	// $b = $a - $b;
	// $a = $a - $b;

	echo $a.' '.$b;
}


//$s = swap(1,3);


function noi_chuoi(&$chuoi){
	echo $chuoi = $chuoi." Chuỗi đã được nối".'<br>';
}

try{
	$chuoi = "Chuỗi ban đầu";
	noi_chuoi($chuoi);

	//echo $chuoi;
	echo 2/0;
}
catch(Exception $e){
	echo  $e->getMessage();
}




?>