<?php


abstract class hocsinh{

	public static $ten = "chưa có tên";
	protected $tuoi  = "12";

	abstract function setTen($name);
	abstract function getTen();


	// public function hocsinh(){
	// 	echo "lớp hocsinh vừa được khởi tạo".'<br>';
	// }


	// public function __destruct(){
	// 	echo "lớp hocsinh đã bị hủy".'<br>';
	// }


	// public function test(){
	// 	echo "đã có lớp hocsinh".'<br>';
	// }
	// public function test2(){
	// 	echo "đã có lớp hocsinh lần 2".'<br>';
	// }

}
// class hs extends hocsinh{

// 	// public function __construct(){
// 	// 	echo "lớp hs vừa được khởi tạo";
// 	// }
// }

// $hocsinhA = new hocsinh;
// $hocsinhA->setTen('Hương');
// echo $hocsinhA->getTen();


// $hocsinhB = new hocsinh;
// echo $hocsinhB->getTen();




// $hocsinhA->test();
// $hocsinhA->test2();





// class hs extends hocsinh{


// 	var $tuoi = 13;

// 	public function intuoi(){
// 		return $this->tuoi;
// 	}

// }

// $hocsinhB = new hs;
// echo $hocsinhB->intuoi();



// $hocsinhA = new hocsinh;

// echo $hocsinhA->ten;

//echo $hocsinhA->tuoi;






?>