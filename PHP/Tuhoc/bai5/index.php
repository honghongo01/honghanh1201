<?php
   function ham(){
       echo 'Day la hma1';
   }
   ham();

   function ts($a){
           echo $a;
   }
   //ts:biến đk khởi tạo trong ham đề hứng gt truyền vào

   //dối số giá trị đk truyền vào trong hàm
   ts('a');


   function ham1($ts=1){
       echo $ts;
   }
   ham1();

   //tham trị:gt truyền vào k thay đổi sau ki hàm xli xong
   //tham chiếu:gt bị td khi hàm xli xong

//    $a=1;
//    function tham_tri($tham_tri){
//        $tham_tri++;
//        echo $tham_tri;
//    }
//    tham_tri($a);
//    echo $a;

//    function tham_chieu(&$tham_chieu){
//        $tham_chieu++;
//        echo $tham_chieu;
//    }
//    tham_chieu($a);
//    echo $a;

//    $ham_ano=function(){
//          echo 'hàm ano';
//    };
//    $a=5;
//    $ham_ano();
//    $arr_func=[
//        'func1'=>function(){
//           echo 'ham1';
//        },
//        'func2'=>function($ts){
//            $ts++;
//              echo 'ham2 '.$ts;
//        },
//        'func3'=>function(&$ts=1){
//         $ts++;
//         echo 'ham3'.$ts;
//   }
// ];



//    $arr_func['func1']();
//    $arr_func['func2']($a);
//    $arr_func['func3']($a);
//    echo $a;


//    $mang=[1,2,3,4];
//    //duyệt qua
//    array_walk($mang,function($value,$key){
//        echo 'key co gt:'.$key.'gia tri:'.$value;
//    });

//    $arr=[
//        'key1'=>1,
//        'key2'=>2
//    ];
//    array_walk($arr,function($value,$key){
//     echo 'key co gt:'.$key.'gia tri:'.$value;
// });

// $callback_func=function($value,$key){
//     echo 'key co gt:'.$key.'gia tri:'.$value;
// };
// array_walk($arr,$callback_func);

//closure

$message='day la thong bao';
// function goi_tb($tin){
//     echo $tin;
// }
// goi_tb($message);

$tin=function() use ($message){
    echo $message;
};
$tin();
?>