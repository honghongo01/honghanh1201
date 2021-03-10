<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Câu lệnh điều kiện</title>
<?php
function Sochan($x)
{
	if($x%2==0)
		return true;//trả kết quả true: là số chẵn
	else
		return false;//số lẻ
}
//hàm tính tổng
function Tong($a, $b)
{
	$t = $a + $b;
	return $t;
}
?>
</head>

<body>
<h1> Câu lệnh điều kiện</h1>
<?php
$n = 5;
$ketqua = Sochan($n);
if($ketqua==true)
{
	echo "<br> Số $n là số chẵn";
}
else
{
	echo "<br> Số $n là số lẻ";
}
?>
<h2> Sử dụng hàm Tong()</h2>
<?php
	$n1 = 10;
	$n2 = 20;
	$n3 = Tong($n1, $n2);
	echo "<h3> Tổng của $n1 và $n2 là: $n3 </h3>";
?>
</body>
</html>