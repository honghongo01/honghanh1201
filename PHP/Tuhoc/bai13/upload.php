<?php
    // var_dump($_FILES);
    // move_uploaded_file($_FILES['upload_file']['tmp_name'],'upload/'.$_FILES['upload_file']['name']);
  $foder_path='upload/';
  $file_path=$foder_path.$_FILES['upload_file']['name'];
   $flag_ok=true;
  // jpg,png,jpeg,gif
  if(file_exists($file_path)){
      echo 'trungd';
      $flag_ok=false;
  }
  $file_type=strtolower(pathinfo($file_path,PATHINFO_EXTENSION));
  echo $file_type;
  $ex=array('jpg','png','jpeg');
  if(!in_array($file_type,$ex)){
      echo 'k hợp lệ';
      $flag_ok=false;
  }
  //check dung lượng

  if($_FILES['upload_file']['size']>500000){
      echo 'dung luong loi';
      $flag_ok=false;
  }
  if($flag_ok){
 move_uploaded_file($_FILES['upload_file']['tmp_name'],$file_path);

  }else{
      echo 'không';
  }

?>