<?php

try{
	$dbh = new PDO('mysql:host=localhost;dbname=tin_tuc', 'root', '');

	$dbh->exec('set names utf8');


	$sql = "SELECT * FROM theloai";

	$stmt = $dbh->prepare($sql);

	if($stmt->execute()){
		while($result = $stmt->fetch(PDO::FETCH_OBJ)){
			echo $result->Ten.'<br>';
		}
	}
	else{
		echo "Lỗi thực thi code";
	}



	//$dbh = NULL;
	
}
catch(\PDOException $e){
	echo "Lỗi: ". $e->getMessage();
	die;
}


?>