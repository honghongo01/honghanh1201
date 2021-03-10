<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cart=array("sp1"=>2,"sp2"=>1,"sp3"=>3);
?>
    <?php
       foreach($cart as $masp=>$soluong){
           echo "<h3>San phâm:$masp,số lượng :$soluong</h3>";
       }
       $masp="sp04";
       $test=array_key_exists($masp,$cart);
       if($test)
        echo "<h3> tồn tại mã $masp</h3>";
        else
            echo "<h3> chưa tồn tại mã $masp</h3>";
    ?>
    <?php
    foreach(array_keys($cart) as $masp){
    echo "<h3>SP:$masp</h3>";
    }
    ?>
</body>
</html>