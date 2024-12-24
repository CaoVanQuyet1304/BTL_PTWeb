<?php
session_start();
include "../config/connect.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['masv']) && isset($_POST['email'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $masv = validate($_POST['masv']);
    $email = validate($_POST['email']);

    $stmt = $conn->prepare("SELECT * FROM db_account WHERE user_name = ? AND pass_word = ?");
    $stmt->bind_param("ss", $username, $hashed_password);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT); 

    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // So sánh mật khẩu đã mã hóa
        if (password_verify($password, $row['pass_word'])) {
            // Nếu mật khẩu đúng, lưu thông tin người dùng vào session
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['masv'] = $row['masv'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];

            // Chuyển hướng đến trang dashboard tương ứng với quyền
            if ($row['role'] === "user") {
                header("Location: user_dashboard.php?page=user");
                exit();
            } else if ($row['role'] === "admin") {
                header("Location: admin_dashboard.php?page=admin");
                exit();
            } else {
                header("Location: login.php?error=Lỗi phân quyền!");
                exit();
            }
        } else {
            // Mật khẩu không đúng
            header("Location: login.php?error=Mật khẩu không chính xác!");
            exit();
        }
    } else {
        // Không tìm thấy tài khoản
        header("Location: login.php?error=Tên đăng nhập hoặc mã sinh viên không tồn tại!");
        exit();
    }
    

    

    $stmt->close(); // Đóng kết nối
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
        <label for="masv">Mã Sinh viên</label>
        <input type="text" id="masv" name="masv" placeholder="StudentCode" required>
        
        <label for="username">Họ và tên</label>
        <input type="text" id="username"  name="username" placeholder="UserName" required>

        <label for="password">Mật khẩu</label>
        <input type="password" id="password"  name="password" placeholder="Password" required>

        <label for="email">Email</label>
        <input type="email" id="email"  name="email" placeholder="Email" required>

        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>