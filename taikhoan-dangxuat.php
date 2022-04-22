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
    <title>Tài khoản đăng xuất</title>
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
            <form action="./function/dangnhap.php" method="post">
                <h2>Cảm ơn bạn đã đến với chúng tôi! </h2>
                <?php
                    $email=$user[0]['email'];
                    $hoten=$user[0]['hoten'];
                    $Sdt= $user[0]['sdt'];
                    $diachi=$user[0]['diachi'];
                    echo'
                        
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