<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mảng - sử dụng tên truy cập (key) cho từng phần tử</title>
</head>

<body>
<h1>Mảng - sử dụng index là số thứ tự</h1>
<?php
$cart = array("sp01" => 2, "sp02" => 1,"sp03"=>3);//tạo mảng giỏ hàng lưu mã sản phẩm  và số lượng
?>

<h2> Sử dụng foreach để duyệt</h2>
<?php
foreach($cart as $masp => $soluong)
{
	echo "<h3> sản phẩm: $masp, số lượng: $soluong </h3>";
}

$masp = "sp04";
$test = array_key_exists($masp, $cart);
if($test)
	echo "<h3> tồn tại mã $masp</h3>";
else
	echo "<h3> chưa tồn tại mã $masp</h3>";
?>
<h2> Chỉ duyệt các Key của mảng</h2>
<?php
//hàm array_keys($bienmang): trả về danh sách các key của mảng
foreach(array_keys($cart) as $masp)
{
	echo "<h3> sản phẩm: $masp </h3>";
}
?>

</body>
</html>