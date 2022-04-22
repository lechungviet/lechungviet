<?php
    require_once('xuly.php');
    if(isset($_SESSION['login']))
        $user=$_SESSION['login'];
    else 
        $user='';
    if(!isset($_SESSION['login'])){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Tài khoản cá nhân</title>
    <meta charset="UTF-8">
    <meta name="description" content="Học lập trình web" />
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <!-- header -->
    <?php require_once('menu.php'); ?>
    <!-- container -->
    <div class="container-listKhoa">
        <div style="padding: 30px;"></div>
        <div class="container-login">
           <!-- <form action="./function/dangnhap.php" method="post"> -->
                 <form action="./function/doimk-nguoidung.php" method="post">
                <h2>Đổi mật khẩu </h2>
                <?php
                    $iduser=$user[0]['iduser'];
                    $email=$user[0]['email'];
                    $hoten=$user[0]['hoten'];
                    $Sdt= $user[0]['sdt'];
                    $diachi=$user[0]['diachi'];

                    echo'
                        <input type="text" name="iduser" value="'.$iduser.'" readonly style="display: none;"> <br>
                        <lable> Tài khoản đăng nhập: </lable> <br>
                        <input type="email" name="email" value="'.$email.'" readonly> <br>
                        <lable> Họ tên: </lable> <br>
                        <input type="text" name="hoten" value="'.$hoten.'" readonly> <br>
                        <lable> Số điện thoại: </lable> <br>
                        <input type="text" name="sodt" value="'.$Sdt.'" readonly><br>
                        <lable> Mật khẩu đăng nhập: </lable> <br>
                        <input type="text" name="password" placeholder="nhập password của bạn" ><br>
                        <lable> Địa chỉ giao hàng: </lable> <br>
                        <input type="text" name="diachi" value="'.$diachi.'" readonly> <br>
                        <input type="submit" name="capnhat" value="Cập Nhật"><br>
                        <input type="submit" name="dangxuat" value="Đăng xuất"><br>
                    ';
                ?>
            </form>
        </div>
        <div class="taokhoancach"></div>
    </div>
    <!-- thẻ footer -->
    <?php require_once('foodter.php'); ?>
</body>
</html>