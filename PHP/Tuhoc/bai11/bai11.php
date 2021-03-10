<?php
//if(isset($_COOKIE['user_name'])){
//     setcookie('user_name','Admin',time()+(86400*30),"/");

// $user_name=$_COOKIE['user_name'];
// echo $user_name;
// }
//xóa
// setcookie('user_name','Admin',time()-(86400*30),"/");
// if(isset($_COOKIE['user_name'])){

// $user_name=$_COOKIE['user_name'];
// echo $user_name;
// }
// else{
//     echo 'cooke đã bị hủy';
// }

//session
//khởi tạo
session_start();
$s=isset($_SESSION['color'])?$_SESSION['color']:'';
echo $s;
?>