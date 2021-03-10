<?php
//connect
$host_name = 'localhost';
$db_name = 'demo_dbo';
$user_name = 'demo_dbo';
$password = 12345678;
try{
$connect = new PDO("mysql:host=$host_name;dbname=$db_name" , $user_name , $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $sql="CREATE TABLE `demo_dbo`.`user` ( `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT , `user_name` VARCHAR(5) NULL DEFAULT NULL , `password` VARCHAR(5) NULL DEFAULT NULL , `email` VARCHAR(5) NULL DEFAULT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
// $connect->exec($sql);
//echo 'success';

//tạo bảng

//thêm

// $sql="INSERT INTO `user`(`ID`, `user_name`, `password`, `email`) VALUES (:id,:user,:pass,:email)";
// $query=$connect->prepare($sql);
// $query->bindParam(':id',$id);
// $query->bindParam(':user',$user);
// $query->bindParam(':pass',$pass);
// $query->bindParam(':email',$email);
// $id=2;
// $user='2345';
// $pass='2345';
// $email='34567';
// $query->execute();
// $connect->exec($sql);

//truy vấn
// $sql="select * from `user`";
// $query=$connect->prepare($sql);
// $query->execute();
// //fetch duyêt tuwngd cái
// $arr=array();
// while($kq=$query->fetch(PDO::FETCH_ASSOC)){
    //fetch ddwwe tróng trả đầy đủ,
    //nêu FETCH_ASSOC: trả về mnagr chỉ có key và valua
        //nêu FETCH_MUN: trả về mnagr chỉ có chỉ số và valua
    //nêu FETCH_OBJ: trả về đối tượng

//  array_push($arr,$kq);
// }
// echo '<pre>';
// var_dump($arr);
// echo '</pre>';

// $sql="UPDATE `user` SET `user_name` = 'hhh', `password` = '45678', `email` = '45678' WHERE `user`.`ID` = 1;";
// $connect->exec($sql);


$sql="DELETE FROM `user`  WHERE `user`.`ID` = 1;";
$connect->exec($sql);
}
catch(PDOException $e){
    echo $e->getMessage();
}
$connect=null;
?>