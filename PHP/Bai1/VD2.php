<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Câu Điều kiện</h1>
    <?php
    $n=5;
    if($n%2==1){
        echo "<br>Số $n là số lẻ";
    }else{
        echo "<br>Số $n là số chẵn";
    }
    ?>
    <h2>Một trang php có thể hiện thị nhiều khối lệnh</h2>
    <?php
    $n=6;
    if($n%2==1){
        echo "<br>Số $n là số lẻ";
    }else{
        echo "<br>Số $n là số chẵn";

    }
    
    ?>
</body>
</html>