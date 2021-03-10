<?php
//$myfile=fopen('1.txt','r');
//dọc
// $content=fread($myfile,filesize('1.txt'));
//viết
// $myfile=fopen('1.txt','w');
// $noi_dung='dayy la';
// //  fwrite($myfile,$noi_dung);
// $myfile=fopen('1.txt','a');
// $noi_dung='hong hanh';
//  fwrite($myfile,$noi_dung);
// //echo $content;
// fclose($myfile);

//lssys nội dung
$con_tent=file_get_contents('1.txt');
echo $con_tent;

$noi_dung='day là file put onteny';
file_put_contents('1.txt',$noi_dung);


?>