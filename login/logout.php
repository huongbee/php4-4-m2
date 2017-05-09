<?php

session_destroy();

session_start();
$_SESSION['success'] = "Đăng xuất thành công";

header('location:login.php');

?>