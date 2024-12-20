<?php
 require_once'../admin/config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUMG.com | Trang quản lí điểm sinh viên</title>
    <link rel="stylesheet" href="../css/user.css">
    <link rel="icon" href="../image/logo.jpg">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div>
            </div>
        </div>
        <div class="menu">
            <ul class="list_menu">
                    <li><a href="./user.php"> Trang chủ </a></li>
                    <li><a href=""> Bảng điểm </a></li>
                    <li><a href="./user.php"> Tài khoản </a></li>
                    <li style="float: right;"><a href="../page/login.php"> Đăng nhập </a></li>
            </ul>
        </div>
        <div id="main">
            <div class="sidebar">
                <ul class="list_sidebar">
                    <li><a href="#"> Bảng điều khiển </a></li>
                    <li><a href="#"> Sinh viên </a></li>
                    <li><a href="#"> Giáo viên </a></li>
                    <li><a href="#"> Cài đặt </a></li>
                    <li><a href="#"> Trợ giúp </a> </li>
                </ul>
            </div>
            <div class=" content">
                <!--<div class="container">
                  <div id="info1">
                    <h2> Thông tin sinh viên </h2>
                    <p> Mã sinh viên </p>
                    <p> Họ và tên </p>
                    <p> Ngày sinh </p>
                    <p> Giới tính </p>
                    <p> Điện thoại </p>
                    <p> Email</p>
                  </div>
                  <div id="info2">
                    <h2> Thông tin khóa học </h2>
                    <p> Lớp </p>
                    <p> Ngành </p> 
                    <p> Chuyên ngành </p>
                    <p> Khoa </p>
                    <p> Niên khóa </p>            
                  </div>
                </div>--> 
                

            </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
            <div>
                <li><a href="">Copyright © 2020 Trường Đại học Mỏ - Địa chất</a></li> 
                    <p>Version: MOHN-2024.12C.00 (updated 2024-12-03 13:35)</p>
            </div>
        </div>
    </div>
</body>
</html>