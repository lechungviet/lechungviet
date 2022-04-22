<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>Danh mục sản phẩm</title>
</head>
<body>
    <?php require_once("header.php"); ?>
    <?php require_once("menu.php"); ?>
    <!-- container -->
    <div class="container-listKhoa">
        <div style="padding: 30px;"></div>
        <div class="container-login">
            <h2>Đăng kí tài khoản </h2>
            <form action="./function/dangkiTK.php" method="post" role="form">
                <input type="email" name="email" placeholder="Nhập email"> <br>
                <input type="text" name="hoten" placeholder="Nhập họ tên">
                <input type="text" name="sodt" placeholder="Nhập số điện thoại">
                <input type="text" name="diachi" placeholder="Nhập địa chỉ">
                <input type="password" name="password" placeholder="Nhập mật khẩu">
                <span><?php if(isset($_SESSION['erro'])) echo $_SESSION['erro']; ?></span>
                <input type="submit" name="submit" value="Đăng kí"><br>
            </form>
        </div>
        <div class="taokhoancach"></div>
    </div>
    <div class="khoancach"></div>
    <?php require_once("foodter.php"); ?>
</body>
</html>