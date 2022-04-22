<?php
    require_once('xuly.php');
    if(isset($_SESSION['login']))
        $user=$_SESSION['login'];
    else 
        $user='';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Trắc nghiệm kiến thức</title>
    <meta charset="UTF-8">
    <meta name="description" content="Học lập trình web" />
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <!-- header -->
    <?php require_once('header.php'); ?>
    <?php require_once('menu.php'); ?>
    <!-- container -->
    <div class="container-listKhoa">
        <div style="padding: 30px;"></div>
        <div class="container-login">
            <h2>Đăng nhập hệ thống </h2>
            <form action="./function/dangnhap.php" method="post">
                <input type="email" name="email" placeholder="Nhập email"> <br>
                <input type="password" name="password" placeholder="Nhập mật khẩu"><br>
                <span><?php if(isset($_SESSION['erro-login'])) echo $_SESSION['erro-login']; ?></span> <br>
                <input type="submit" value="Đăng nhập" name="btn-login">
                <p>Nếu chưa có tài khoản <a href="dangki-taikhoan.php">Đăng kí ngay</a></p>
            </form>
        </div>
        <div class="taokhoancach"></div>
    </div>
    <!-- thẻ footer -->
    <?php require_once('foodter.php'); ?>
</body>
</html>