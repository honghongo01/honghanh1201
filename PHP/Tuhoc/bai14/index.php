<?php
$connect=mysqli_connect('localhost','mysqli',12345678,'mysqli');
// var_dump($connect);
// $sql="CREATE TABLE `mysqli`.`user` ( `ID` INT UNSIGNED NOT NULL AUTO_INCREMENT , `user_name` VARCHAR(5) NULL DEFAULT NULL , `password` VARCHAR(5) NULL DEFAULT NULL , `email` VARCHAR(5) NULL DEFAULT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";

 mysqli_query($connect,$sql);
//add
// $sql="INSERT INTO `user`(`ID`, `user_name`, `password`, `email`) VALUES (1,'abc',123,123)";

// mysqli_query($connect,$sql);
//select

// $sql="Select * from `user`";
// $query=mysqli_query($connect,$sql);
// $arr_kq=[];
// //var_dump($query);
// if(mysqli_num_rows($query)>0){
//     //duyet qua tung dong
//     while($row=mysqli_fetch_assoc($query)){
//         var_dump($row);
//         array_push($arr_kq,$row);
//     }
// }else{
//         echo 'khong có';
//     }
// mysqli_close($connect);
// echo '<pre>';
// var_dump($arr_kq);
// echo '</pre>';
// //update
// $sql="UPDATE `user` SET `user_name` = 'hhh', `password` = '45678', `email` = '45678' WHERE `user`.`ID` = 1;";
// $query=mysqli_query($connect,$sql);

//delete
$sql="DELETE FROM `user`  WHERE `user`.`ID` = 1;";
 $query=mysqli_query($connect,$sql);
 mysqli_close($connect);
?>