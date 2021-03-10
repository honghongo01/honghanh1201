<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mảng - sử dụng tên truy cập (key) cho từng phần tử</title>
</head>

<body>
<h1>Mảng - sử dụng index là số thứ tự</h1>
<?php
$sinhvien = array("Tuấn" => 20, "Hoa" => 19,"Dũng"=>21);//tạo mảng 3 phần tử có key là: Tuan,Hoa,Dung
?>

<h2> Sử dụng foreach để duyệt</h2>
<?php
foreach($sinhvien as $key => $value)
{
	echo "<h3> Sinh viên $key, tuổi là $value </h3>";
}
?>
</body>
</html>