<?php
session_start();





if(isset($_POST['login'])){
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];


	if(isset($_POST['remember']) && ($_POST['remember'] =="on" || $_POST['remember'] ==1)){
		setcookie('username',"khoapham",time()+120);
		setcookie('password','123',time()+120);
	}
}


if(isset($_SESSION['password']) && isset($_SESSION['username'])){


	if($_SESSION['username'] == 'khoapham' && $_SESSION['password'] == 123){
		$user =  "Chào bạn $_SESSION[username]";
		unset($_SESSION['error']);
		unset($_SESSION['success']);
	}
	else{

		$_SESSION['error'] = "Sai thông tin đăng nhập";
		header('Location:login.php');
	}

}
elseif(isset($_COOKIE['password']) && isset($_COOKIE['username'])){
	if($_COOKIE['username'] == 'khoapham' && $_COOKIE['password'] == 123){
		$user =  "Chào bạn $_COOKIE[username]";
	}
	else{
		header('Location:login.php');
	}
}

else{
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang quản trị</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
</head>
<body>
	<div class="container">
		<div class="col-md-10"><?=$user?></div>
		<div class="col-md-2"> <a href="logout.php">Đăng xuất</a></div>
	</div>
	



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</html>






