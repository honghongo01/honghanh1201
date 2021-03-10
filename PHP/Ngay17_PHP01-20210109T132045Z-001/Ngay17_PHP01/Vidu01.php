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
<?php
echo "<h2>HELLO FROM PHP</h2>\n";
$n=5;
$hoten= "ABC";
for($i=1; $i<=$n; $i++)
{
	echo "<div> " . $i . ":" . $hoten . "</div>\n";
}
?>
</body>
</html>