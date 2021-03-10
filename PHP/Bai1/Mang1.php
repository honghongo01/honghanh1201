<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sinhvien=array("tuan","hoa","dung");
        $sinhvien[3]="lam";
        for($i=1;$i<count($sinhvien);$i++){
               echo "<h3>SInh viên thu $i là:$sinhvien[$i]</h3>";

        }
    
    ?>
            <h2>Sử dụng foreach</h2>
            <?php
              foreach($sinhvien as $i=>$sv){
                  echo "<h3>Sinh viên thứ $i:$sv</h3>";
            }
            
            ?>

</body>
</html>