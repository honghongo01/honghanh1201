<?php 
     $str="hello";
     //echo $str;
     //print($str);
     //$$b=print($str);
     //echo $b;
//      printf('Đây là %s',$str);
//    $f=1.12;
//      printf('Đây là %f',$f);
//   print_r(array(
//       'key'=>'value'
//   ))
// $arr=array(
//     'key'=>'value'
// );
// echo '<pre>';
// // print_r($arr);
// print_r(new class('do',4){
//     public $color;
//     public $num;
//     public function __construct($color,$num){
//         $this->color=$color;
//         $this->num=$num;
//     }
// });
// echo '</pre>';


// $str1='chuoi 1,chuoi 2';
// $kq=explode(',',$str1,2);

// //var_dump($kq);
// //lắp lại
// $str1=implode(',',$kq);
// //echo $str1;


// //tachs chuối

// $kq=str_split($str1);

// echo '<pre>';
//          print_r($kq);
// echo '</pre>';

// $str2='hong hanh';
// $str2=str_replace('hong','hanh',$str2);
// echo $str2;

// $str3='cau dua du xoai';
// $find=array('cau','dua','du','xoai');
// $replace=array('du','tao');
// $str3=str_replace($find,$replace,$str3);
// echo $str3;

// $str4='hello';
// $str4=str_repeat($str4,5);
// echo $str4;

// $str5='i love you';
// $str5=substr($str5,1,4);
// echo $str5;


// $str6='i love you';
// $str6=strstr($str6,'i');
// echo $str5;


 $str6='i love you';
// $str6=stristr($str6,'Love');
// echo $str6;

//TÌM VỊ TRÍ
$pos=strpos($str6,'i',5);
echo $pos;

// $str='AGGYHH';
// $str=strtolower($str);
// $str=strtoupper($str);
//$str=ucfirst($str);

//$len=strlen($str);
//$len=trim($str);
// $str='No name.
// fghkl';
// $str=nl2br($str);
// echo $str;

// $str='23456';
// $str=md5($str);

$str='<b>ytrerty</b>';
// $str=htmlentities($str);
// //echo $str;
// $str=html_entity_decode($str);
$str=htmlspecialchars($str);
$arr=[
    'key1'=>1,
    'key2'=>2
];
// $json=json_encode($arr);

$json=json_encode(new class('do',4){
         public $color;
         public $num;
         public function __construct($color,$num){
             $this->color=$color;
             $this->num=$num;
         }
        });
//echo $json;
$tem=json_decode($json);
var_dump($tem);
?>