<?php

session_destroy();

setcookie('username',"khoapham",time()-120);
setcookie('password','123',time()-120);


session_start();
$_SESSION['success'] = "Đăng xuất thành công";

header('location:login.php');

?>