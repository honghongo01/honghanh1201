<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hồng hanh</h2>
    <a href="vidu.php?hoten=abc&solan=5">link test</a>
    <?php
    //echo đẩy về
         echo "<h2>Xin chào Hồng Hạnh</h2>\n";
         $n=$_REQUEST["solan"];
         $hoten=$_REQUEST["hoten"];
         for($i=1;$i<=$n;$i++){
             echo "<div>Hello"." ".$i." ".$hoten."</div>\n";
         }
    ?>
</body>
</html>