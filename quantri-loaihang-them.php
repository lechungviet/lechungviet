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
    <title>Quản trị hệ thống</title>
    <meta charset="UTF-8">
    <meta name="description" content="Học lập trình web" />
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <!-- menu -->
    <?php include('menu-quantri.php'); ?>
    <div class="container-admin">
        <div class="nav">
        </div>
        <div class="container">
                <div class="heding">
                   <span>Thêm loại hàng</span>
                   <button id="btn-them">
                        <a href="quantri-loaihang.php">Danh sách</a>
                    </button></td>
                </div>
                <form action="./function/them-loaihang.php" method="post" id="form-themkhoa">
                    <input type="text" name="tenlh" placeholder="Nhập tên loại hàng"> <br> <div class="khoancach"></div>
                    <input type="submit" value="Lưu" name="submit" id="btn-luu"> <br>
                </form>

        </div>
</body>
</html>