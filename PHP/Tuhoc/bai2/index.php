<?php
$bien_1=1;
echo $bien_1;
//cho biết cả kiể dữ liệu
//không cần khia báo kieeeur dữ liệu
var_dump($bien_1);
//hằng số
define('__HANGSO__',20);
var_dump(__HANGSO__);
$x=1;
$y='1';
var_dump($x===$y);

$z='l';
var_dump($x!=$z);

$a=($x<5)?$x:0;
var_dump($a);
//biến b khác null thì sẽ nhận giá tri $b ngược ại là x
$b=$b??$x;
var_dump($b);

?>