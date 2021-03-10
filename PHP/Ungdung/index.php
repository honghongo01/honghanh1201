<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //gọ mã lệnh
    //k tông tại sex báo wanning nhưng vẫn chạy
    //gộp những trang không liên quan
    // include('footer.php');
    //những mã lệnh không liên quan đế trang dưới
    //báo không tồn tại và dừng trang web
    require_once('footer.php');
    $a=10;
    $b=20;
   $t=tinhtong($a,$b);
   echo "<h2>Tính Tổng : $t</h2>";
    ?>
</body>
</html>