<?php

//    for($i=0;$i<22;$i++){
//        echo "choa $i";
//    }
// $i=1;
// for(;$i<22;$i++){
//     echo "choa $i";
// }
 $i=1;
// for(;$i<22;){
//     echo "choa $i";
//     $i++;
// }
// for( ; ;){
//     if($i<11){
//     echo "choa $i";
//     $i++;
//     }
//     else{
//         break;
//     }
// }
//continue:bỏ qua
// for($i=1;$i<11 ;$i++){
//     if($i===6){
//        continue;
//     else{
//         echo $i;
//     }
// }
//biến đếm dã được khởi tạo r thì dùng white
// while($i<11){
//     echo $i;
//     $i++;
// }
//do-white thực thi ít nhất 1 lần
// do{
//     echo $i;
//     $i++;
// }
// while($i<11);
$mang=array("a","b","c");//key:0,1,2
echo $mang[0];
$mang2=array('key1'=>"a",'key2'=>"b",'key3'=>"c");
echo $mang2['key1'];
$arr=[

    'toan'=>10,
    'ly'=>9,
];
echo '<pre>';
var_dump($arr);
echo '</pre>';

var_dump($mang);
foreach($mang as $key=>$valu){
    echo $key.'=>'.$valu;
}
foreach($mang as $valu){
    echo $valu;
}
for($i=0;$i<count($mang);$i++){
    echo $i.'=>'.$mang[$i];
}

$arr=array();
array_push($mang,'d');
echo '<pre>';
var_dump($mang);
echo '</pre>';
//thêm mảng
$mang3=array_merge($mang,$arr);
echo '<pre>';
var_dump($mang3);
echo '</pre>';





echo count($mang);


$pt_kt=3;
if(in_array($pt_kt,$mang)){
    echo $pt_kt;
}

var_dump(in_array($pt_kt,$mang));


//tì theo key;

var_dump(array_key_exists('key1',$mang2));

if(array_key_exists('key1',$mang2)){
    echo $mang2['key1'];
}
if(key_exists('key1',$mang2)){
    echo $mang2['key1'];
}
//cắt pt
$kq=array_slice($mang,1);
var_dump($kq);
?>