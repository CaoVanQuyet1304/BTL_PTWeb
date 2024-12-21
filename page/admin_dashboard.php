<?php
session_start();
require_once('../config/connect.php');
if(isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['role'])){ ?>

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
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../image/logo.jpg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>HUMG.com | Admin Dashboard</title>
</head>
<body>
<div class="wrapper">
        <?php
        include("../page/admin/admin_header.php");
        include("../page/admin/main-content.php");
        ?>
        
</body>
</html>