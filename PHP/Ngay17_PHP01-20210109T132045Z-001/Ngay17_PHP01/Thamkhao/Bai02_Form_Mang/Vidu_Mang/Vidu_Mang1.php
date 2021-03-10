<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mảng - sử dụng index là số thứ tự</title>
</head>

<body>
<h1>Mảng - sử dụng index là số thứ tự</h1>
<?php
$sinhvien = array("Tuấn", "Hoa","Dũng");//tạo mảng 3 phần tử có index là 0,1,2
$sinhvien[3] = "Lâm";//thêm phần tử "Lâm" và vị trí 3 của mảng
for($i=0; $i<count($sinhvien); $i++)
{
	echo "<h3> Sinh viên thứ $i là: $sinhvien[$i] </h3>";
}
?>
<h2> Sử dụng foreach dạng 1</h2>
<?php
foreach($sinhvien as $sv)
{
	echo "<h3> Sinh viên : $sv </h3>";
}
?>
<h2> Sử dụng foreach dạng 2</h2>
<?php
foreach($sinhvien as $i => $sv)
{
	echo "<h3> Sinh viên thứ $i là : $sv </h3>";
}
?>
</body>
</html>