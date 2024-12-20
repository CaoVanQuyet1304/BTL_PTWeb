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
    <form action="index.php" method="post">
        <h2> ĐĂNG NHẬP </h2>
        <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="">Họ và tên</label>
        <input type="text" name="username" placeholder=" User Name ">

        <label for="">Mật khẩu</label>
        <input type="text" name="password" placeholder=" Password ">

        <button type="submit"> Đăng nhập </button>

    </form>
</body>
</html>