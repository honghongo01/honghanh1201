<?php
function Sochan($x)
{
	if($x%2==0)
		return true;//trả kết quả true: là số chẵn
	else
		return false;//số lẻ
}
//hàm tính tổng
function Tong($a, $b)
{
	$t = $a + $b;
	return $t;
}
//hàm tính max
function TinhMax($a,$b)
{
	$m = ($a>$b)? $a: $b; //nếu a>b thì trả về a, không thì trả về b
	return $m; 
}
?>