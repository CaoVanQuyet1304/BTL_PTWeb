<?php
session_start();
require_once "../admin/config/connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user from database
    $stmt = $conn->prepare("SELECT * FROM db_admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Redirect based on role
        if ($user['role'] == 'admin') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: user_dashboard.php");
        }
        exit();
    } else {
        header("Location: login.php?error=Invalid username or password");
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
    <title>HUMG.com | Đăng nhập </title>
</head>
<body>
    <form action="login.php" method="post">
        <h2> ĐĂNG NHẬP </h2>
        <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="">Họ và tên</label>
        <input type="text" name="username" placeholder=" User Name " required>

        <label for="">Mật khẩu</label>
        <input type="password" name="password" placeholder=" Password " required>

        <button type="submit"> Đăng nhập </button>
    </form>
</body>
</html>