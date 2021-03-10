<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="resquest.php?hoten=ABC&solan=3">Hien thi 3 lần</a>
</body><br>
<a href="?hoten=XYZ&solan=5">Hien thi 5 lan</a>
<?php
if(isset($_REQUEST["hoten"])){
    $hoten=$_REQUEST["hoten"];
    $n=$_REQUEST["solan"];
    for($i=1;$i<$n;$i++){
        echo"<h3>Hello:$hoten</h3>";
    }
}

?>
</html>