<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Học PHP</h1>
    <?php

    $hoten="Hong Hanh";
    $tuoi=20;
    $diem=9;
    $gioitinh=true;
    echo "<br>Kieu du lieu cua ten:".gettype($hoten);
    echo "<br>Kieu du lieu cua tuoi:".gettype($tuoi);
    echo "<br>Kieu du lieu cua ten:".gettype($diem);
    echo "<br>Kieu du lieu cua ten:".gettype($gioitinh);

    echo "<br>Ten:$hoten,tuoi:$tuoi";

    echo "<br>Kieu du lieu cua ten:".$hoten."tuoi:".$tuoi;


    ?>
</body>
</html>