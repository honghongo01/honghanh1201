<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tính tổng</title>
</head>

<body>
<?php
$a = 0;
$b = 0;
$tong= "";
if(isset($_REQUEST["tinh"]))//nếu form đã được submit
{
	$a = $_REQUEST["tA"];
	$b = $_REQUEST["tB"];
	$tong = $a + $b;
}
?>
<!--action ="" thì form sẽ submit lại tới chính trang hiện tại-->
<form name="f1" id="f1"  method="get" action="">
A = <input type="text" name="tA" id="tA" value="<?=$a?>">
<br><br>
B = <input type="text" name="tB" id="tB" value="<?=$b?>">
<br><br>
<input type="submit" id="tinh" name="tinh" value="Tổng">
</form>
<div> Tổng là: <?=$tong?> </div>
</body>
</html>