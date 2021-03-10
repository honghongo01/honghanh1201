<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ví dụ PHP</title>
</head>

<body>
<h1> Ví dụ PHP</h1>
<?php
$ten = "Nguyễn Văn Dũng";
$tuoi = 20;
$diem = 8.5;
$gioitinh = true;
//xem kiểu dữ liệu của 1 biến
echo "<br>Kiểu dữ liệu của biến ten là:  " . gettype($ten);
echo "<br>Kiểu dữ liệu của biến tuoi là:  " . gettype($tuoi);
echo "<br>Kiểu dữ liệu của biến diem là:  " . gettype($diem);
echo "<br>Kiểu dữ liệu của biến gioitinh là:  " . gettype($gioitinh);
//php cho phép đặt tên biến vào chuỗi để hiện thì (không cần ghép cuỗi bằng dấu chấm)
echo "<br><br>Cách 1: Bạn $ten, tuổi là: $tuoi";
echo "<br>Cách 2: Bạn  " .$ten . ", tuổi là: " . $tuoi;

//có thể gán 1 kiểu dữ liệu mới cho biến đã có (biến sẽ đổi sang kiểu mới
$gioitinh = "Nam";
echo "<br><br>Kiểu dữ liệu của biến gioitinh là:  " . gettype($gioitinh);
?>
</body>
</html>