<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ví dụ sử dụng Request</title>
</head>

<body>
<a href="Vidu_Request.php?hoten=ABC&solan=3"> Hiện thị ABC 3 lần</a>
<br>
<a href="?hoten=XYZ&solan=5"> Hiện thị XYZ 5 lần</a>
<?php
if(isset($_REQUEST["hoten"]))//nếu tồn tại biến hoten trong $_REQUEST[]
{
	$hoten = $_REQUEST["hoten"];
	$n = $_REQUEST["solan"];
	for($i=1; $i<=$n; $i++)
	{
		echo "<h3> Hello: $hoten </h3>";
	}
}
?>
</body>
</html>