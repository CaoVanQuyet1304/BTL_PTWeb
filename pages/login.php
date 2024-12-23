<?php
session_start();
require_once('../config/connect.php');

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['masv'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $masv = validate($_POST['masv']);


    $sql = "SELECT * FROM db_account WHERE username='$username' AND masv='$masv'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['username'] === $username && $row['password'] === $password && $row['masv'] === $masv ) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['masv'] = $row['masv'];
            $_SESSION['role'] = $row['role'];
            if ($row['role'] == 'user') {
                header("Location: user_dashboard.php?page=user");
                exit();
            } elseif ($row['role'] == 'admin') {
                header("Location: admin_dashboard.php?page=admin");
                exit();
            } else {
                header("Location: login.php?error=Incorrect Username or Password");
                exit();
            }
        } else {
            header("Location: login.php?error=Incorrect Username or Password");
            exit();
        }
    } else {
        header("Location: login.php?error=Incorrect Username or Password");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" href="../image/logo.jpg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>HUMG.com | Đăng nhập</title>
</head>
<body>
    <form action="" method="post">
        <h2>ĐĂNG NHẬP</h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="masv">Mã sinh viên</label>
        <input type="text" id="masv" name="masv" placeholder="Studentcode" required>

        <label for="username">Họ và tên</label>
        <input type="text" id="username" name="username" placeholder="Username" required>

        <label for="password">Mật khẩu</label>
        <input type="password" id="password" name="password" placeholder="Password" required>

        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>