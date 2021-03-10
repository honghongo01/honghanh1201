<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Câu lệnh điều kiện</title>
</head>

<body>
<h1> Câu lệnh điều kiện</h1>
<?php
$n = 5;
if($n%2==1)//nếu biến n chia lấy dưa cho 2 == 1
{
	echo "<br> Số $n là số lẻ";
}
else
{
	echo "<br> Số $n là số chẵn";
}
?>
<h2> Một trang php có thể có nhiều khối lệnh php khác nhau</h2>
<?php
$n = 6;
if($n%2==1)//nếu biến n chia lấy dưa cho 2 == 1
{
	echo "<br> Số $n là số lẻ";
}
else
{
	echo "<br> Số $n là số chẵn";
}
?>
</body>
</html>