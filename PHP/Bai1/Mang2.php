<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sinhvien=array("a"=>1,"b"=>2,"c"=>3);
    ?>
    <?php
    foreach($sinhvien as $key =>$value){
        echo "<h3>sinh viên $key ,tuổi $value</h3>";
    }
    ?>
</body>
</html>