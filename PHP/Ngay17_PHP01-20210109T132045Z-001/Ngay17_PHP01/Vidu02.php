<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ví dụ PHP</title>
<style type="text/css">
div {width:100px; height:50px; border:1px red solid;
	float:left; margin:10px}
</style>
</head>

<body>
<h1> VÍ DỤ LÀM QUEN PHP</h1>
<a href="Vidu02.php?hoten=ABC&solan=5"> Link Test</a>
<?php
echo "<h2>HELLO FROM PHP</h2>\n";
$n= $_REQUEST["solan"];
$hoten= $_REQUEST["hoten"];
for($i=1; $i<=$n; $i++)
{
	echo "<div> " . $i . ":" . $hoten . "</div>\n";
}
?>
</body>
</html>