<?php
$dieu_kien=true;
//    if($dieu_kien){
//        echo "Dậy là trường hợp đúng";
//    }
// if($dieu_kien):
//     echo "if cú thứ 2";
// endif;

// if($dieu_kien):
    // ?>
       <!-- <h1>Tiêu đề 01</h1> -->
     <?php
//     endif;

// if($dieu_kien){
//     echo "Dây đúng";
// }else{
//     echo "đây sai";
// }


// if($dieu_kien):
//     echo "Đúng";
// else:
//     echo"sai";
// endif;


// $bien=1;
// switch($bien){
//     case 1:
//         echo "mot";
//         break;
//     case 2:
//         echo "hai";
//         break;
//     case 3:
//         echo "ba";
//         break;
//     default:
//     echo "day là truong hop cuoi cung";
// }
// if($bien===1){
//     echo "day la mo";
// }elseif($bien===2){
//     echo "Day la trương hơp 2";
// }else{
//     echo "day la trương hop cuoi";
// }

//isset kiểm tra biến nhập vào đã được khỏi tạo hay chưa
//empty kiểm  tra biến nhập vào có rroongx hay không"khowie tạo và có dữ liệu
$bien_0=0;
$bien_rong='';
$bien_khoi_tao;
$biem_false=false;
$bien_null=null;
var_dump((isset($bien_0)));
var_dump((isset($bien_rong)));
var_dump((isset($bien_khoi_tao)));
var_dump((isset($biem_false)));
var_dump((isset($bien_null)));
var_dump((isset($bien_chua_kt)));
// if(isset($bien_chua_kt)){
//     $x=$bien_chua_kt+1;
// }

// $bien=isset($bien_chua_kt)?($bien_khoi_tao+2):null;
// echo $bien;

// (!empty());
$bien_0=0;
$bien_rong='';
$bien_khoi_tao;
$biem_false=false;
$bien_null=null;
var_dump((empty($bien_0)));
var_dump((empty($bien_rong)));
var_dump((empty($bien_khoi_tao)));
var_dump((empty($biem_false)));
var_dump((empty($bien_null)));
var_dump((empty($bien_chua_kt)));
if(!empty($bien_0)){
    $x=$bien_0+1;
    echo $x;
}

//empty:cần phải có dl
//isset:k cần nhập nhưng bắt buộc gủi phải có biên tránh bị lỗi



?>