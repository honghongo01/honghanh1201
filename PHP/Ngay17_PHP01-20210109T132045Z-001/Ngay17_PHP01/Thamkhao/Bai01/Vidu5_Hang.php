<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Khai báo và sử dụng Hằng</title>
<?php
define("SO_PI", 3.14);
define("MONHOC", "Lập trình PHP");
?>
</head>

<body>
<h1> Khai váo và sử dụng Hằng</h1>
<?php
echo "<h2> Môn học " . MONHOC . "</h2>";
$R1 = 10;
$DT1 = SO_PI * $R1 * $R1;
echo "<h3> diện tích hình tròn bán kính $R1 là: $DT1</h3>";

$R2 = 20;
$DT2 = SO_PI * $R2 * $R2;
echo "<h3> diện tích hình tròn bán kính $R2 là: $DT2</h3>";


?>
</body>
</html>