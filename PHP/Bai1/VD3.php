<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        function Sochan($x){
            if($x%2==0)
                return true;
            else   
                return false;
        }

        function tinhtong($a,$b){
            $t=$a+$b;
            return $t;
        }
    ?>
</head>
<body>
    <?php
         $n=5;
         $kq=Sochan($n);
         if($kq==true){
             echo "<br>Số $n là số chẵn";
         }
         else{
             echo "<br>Số $n là số lẻ";
         }
    
    ?>
    <h2>Sử dung ham tổng</h2>
    <?php
    
       $n1=10;
       $n2=20;
       $n3=tinhtong($n1,$n2);
       echo "<h3>Tổng của $n1 và $n2 là $n3</h3>"
    ?>
    
</body>
</html>