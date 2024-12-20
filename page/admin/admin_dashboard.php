<?php
/*session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="icon" href="../../image/logo.jpg">
    <script src="../js/chart1.js"></script>
    <title>HUMG.com | Admin Dashboard</title>
</head>
<body>
<div class="wrapper">
        <?php
        include("header.php");
        include("main-content.php");
        ?>
</body>
</html>