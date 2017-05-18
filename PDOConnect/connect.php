<?php

try{
	$dbh = new PDO('mysql:host=localhost;dbname=db_test', 'root', '');
	$dbh->exec("set names utf8");
	
} catch (PDOException $e) {
    echo "Lỗi:  " . $e->getMessage() . "<br/>";
    die();
}
?>