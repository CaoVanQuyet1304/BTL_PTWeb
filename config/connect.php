<?php 
  $severname = "localhost";
  $username = "root";
  $password = "";
  $db = "db_ptweb";
  $conn = mysqli_connect($severname,$username,$password,$db);
  if($conn){
    //echo "Kết nối thành công ";
  }else{
    //echo " Kết nối không thành công ";
  }
?>
