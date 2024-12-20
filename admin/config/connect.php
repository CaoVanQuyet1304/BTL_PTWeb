<?php 
  $severname = "localhost";
  $username = "root";
  $password = "";
  $db = "qlsv_db";
  $conn = mysqli_connect($severname,$username,$password,$db);
  if($conn){
    //echo "Kết nối thành công ";
  }else{
    //echo " Kết nối không thành công ";
  }


  if(isset($_GET['delete'])){
    $Masv - $_GET['delete'];
    $conn -> query("DELETE FROM tbl_sinhvien WHERE Masv -$Masv");
    header('location: admin.php');
  }
?>
