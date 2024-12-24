<?php
session_start();
require_once('../config/connect.php');
if( isset($_SESSION['username']) && isset($_SESSION['password']) 
   && isset($_SESSION['masv']) 
   && isset($_SESSION['role'])){ ?>
    <?php }else{
        header("Location: login.php");
        exit();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../image/logo.jpg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/chart1.js"></script>
    <title>HUMG.com | Admin Dashboard</title>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <img src="../image/logo.jpg" alt="">
        <h1> Trang quản lí điểm sinh viên</h1>
        <div class="account">
        <img src="../image/user.jpg" alt="">
            <span>Tài Khoản</span>
        </div>
    </div>
    <div id="main">
        <nav class="list_sidebar">
        <ul>
            <li>
            <a href="#" >
                <i class='bx bx-menu'></i>
                <span class="nav-item">MENU</span>
            </a>
            </li>
        
            <li>
            <a href="admin_dashboard.php?page=home">
                <i class='bx bxs-home'></i>
                <span class="nav-item">Trang chủ</span>
            </a>
            </li>

            <li>
            <a href="admin_dashboard.php?page=sinhvien"> 
                <i class='bx bx-table' ></i> 
                <span class="nav-item">Sinh viên</span>
            </a>
            </li>

            <li>
            <a href="admin_dashboard.php?page=chart">
                <i class='bx bx-bar-chart-alt-2' ></i>
                <span class="nav-item">Thống kê</span>
            </a>
            </li>

            <li>
            <a href="#">
                <i class='bx bx-bell' ></i>
                <span class="nav-item">Thông báo</span>
            </a>
            </li>

            <li>
            <a href="#">
                <i class='bx bx-cog' ></i>
                <span class="nav-item">Cài đặt</span>
            </a>
            </li>

            <li>
            <a href="#">
                <i class='bx bx-help-circle' ></i>
                <span class="nav-item">Trợ giúp</span>
            </a>
            </li>

            <li>
            <a href="logout.php" class="logout">
                <i class='bx bx-log-out' ></i>
                <span class="nav-item">Đăng xuất</span>
            </a>
            </li>
        </ul>
        </nav>
        <div class="container">
            <div class="content"> 
                <?php
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                } 
                if($page == 'user'){
                    include("user/home_2.php");
                }elseif($page == 'sinhvien'){
                    include("table/sinhvien.php");
                }elseif($page == 'khoa'){
                    include("table/khoa.php");
                }elseif($page == 'lopchuyennganh'){
                    include("table/lopchuyennganh.php");
                }elseif($page == 'lophocphan'){
                    include("table/lophocphan.php");
                }elseif($page == 'hocphan'){
                    include("table/hocphan.php");
                }elseif($page == 'diemhocphan'){
                    include("table/diemhocphan.php");
                }elseif($page == 'chart'){
                    include("admin/chart.php");
                }else{
                    echo "Không có dữ liệu";
                }
                ?>
            </div>
        </div>
    </div> 
    <div class="footer">
    </div>
</div>    
</body>
</html>
