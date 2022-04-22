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
    <?php 
        if(isset($_SESSION['login']))
            $user=$_SESSION['login'];
        else 
            $user='';
        $iduser=$user[0]['email'];
        $hoten=$user[0]['hoten'];
        $diachi=$user[0]['diachi'];
        $sdt=$user[0]['sdt'];
    ?>
        <div class="container-listKhoa">
            <div style="padding: 30px;"></div>
            <div class="container-login">
                <form action="./function/doitt-nguoidung.php" method="post">
                    <h2>Đổi thông tin cá nhân</h2>
                    <label for="">Email</label><br>
                    <input type="text" value="<?php echo $iduser; ?>" readonly><br>
                    <label for="">Tên</label><br>
                    <input type="text" value="<?php echo $hoten; ?>" readonly><br>
                    <label for="">Địa chỉ hiện tại: <?php echo $diachi; ?></label><br>
                    <input type="text" name="diachi" placeholder="Nhập địa chỉ mới"><br>
                    <label for="">SDT hiện tại: <?php echo $sdt; ?></label><br>
                    <input type="text" name="sdt" placeholder="Nhập sdt mới"><br>
                    <input type="submit" value="Xác nhận" name="capnhat">
                </form>
            </div>
            <div class="taokhoancach"></div>
        </div>
    <div class="khoancach"></div>
    <?php require_once("foodter.php"); ?>
</body>
</html>