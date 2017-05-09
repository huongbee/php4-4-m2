<?php
session_start();


setcookie('test','123456',time()+60);

echo 'đã set cookie';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login in</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

	<style>
	.text-center{
		margin: 50px 0 20px;
		color: blueviolet
	}
	</style>
</head>
<body>

	<div class="container">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<h2 class="text-center"> Đăng nhập </h2>
			<form class="form-horizontal" method="POST" action="test_session.php">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="username">Email:</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="username" placeholder="Enter username">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="password">Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" class="form-control" name="password" placeholder="Enter password">
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label><input type="checkbox" name="remember"> Remember me</label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" name="login" class="btn btn-success">Login</button>
			    </div>
			  </div>
			</form>
			<?php
			if(isset($_SESSION['error'])){
				echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
			}
			?>
			<?php
			if(isset($_SESSION['success'])){
				echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
			}
			?>
		</div>
		
		<div class="col-md-3">
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</html>