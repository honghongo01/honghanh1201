<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chèn tệp PHP chứa mã lệnh dùng chung vào trang khác</title>
</head>

<body>
<h1> Ví dụ chèn mã lệnh dùng chung từ trang PHP khác</h1>
<?php
//include("HamDungChung.php");
require("HamDungChung.php");
$x =10;
$y = 20;
$m = TinhMax($x,$y);
echo "<h3> Số lớn hơn là: $m";
?>
</body>
</html>