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
        <div class="container-listKhoa">
            <div style="padding: 30px;"></div>
            <div class="container-login">
                <form action="./function/doimk-nguoidung.php" method="post">
                    <h2>Đổi mật khẩu</h2>
                    <input type="text" name="mkcu" placeholder="Nhập mật khẩu cũ"><br>
                    <input type="text" name="mkmoi" placeholder ="Nhập mật khẩu mới"><br>
                    <input type="text" name="xnmkmoi" placeholder="Nhập lại mật khẩu mới"><br>
                    <input type="submit" value="Xác nhận" name="capnhat">
                </form>
            </div>
            <div class="taokhoancach"></div>
        </div>
    <div class="khoancach"></div>
    <?php require_once("foodter.php"); ?>
</body>
</html>