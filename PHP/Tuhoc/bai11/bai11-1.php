<?php
//cookies
//tạo cooke,có thời gian hết hạn
// setcookie('user_name','Admin goc làm web',time()+(86400*30),"/");

session_start();

$_SESSION['color']='xanh';
// echo $_SESSION['color'];

// //sửa
// $_SESSION['color']='ĐỎ';
// $s=isset($_SESSION['color'])?$_SESSION['color']:'';
// echo $s;

// //xóa
// session_unset();
// session_destroy();
// $s=isset($_SESSION['color'])?$_SESSION['color']:'';
// echo $s;
?>