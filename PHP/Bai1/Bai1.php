<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div{
        width: 100px;
        height: 50;
        background-color: pink;
        border:1px solid yellow;
        float: left;
        /* margin: 10px; */
    }
    </style>
</head>
<body>
    <h1>Lam quen với PHP</h1>
    <?php
    //echo đẩy về
         echo "<h2>Xin chào Hồng Hạnh</h2>\n";
         $n=5;
         $hoten="hanh";
         for($i=1;$i<=$n;$i++){
             echo "<div>Hello"." ".$i." ".$hoten."</div>\n";
         }
    ?>
</body>
</html>