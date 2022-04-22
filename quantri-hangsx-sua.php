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
    <!-- menu -->
    <?php include('menu-quantri.php'); ?>
    <?php 
        $id=$_GET["id"];
        $tennhasx=layTenNSX($id);
    ?>
    <div class="container-admin">
        <div class="nav">
        </div>
        <div class="container">
                <div class="heding">
                   <span>Sửa hãng sản xuất</span>
                   <button id="btn-them">
                        <a href="quantri-hangsx.php">Danh sách</a>
                    </button></td>
                </div>
                <form action="./function/sua-hangsx.php" method="post" id="form-themkhoa">
                    <input type="text" name="id" id="" value="<?php echo "$id" ?>" style="display: none;">
                    <input type="text" name="tennsx" placeholder="Nhập tên nhà sản xuất" value="<?php echo "$tennhasx" ?>"> <br> <div class="khoancach"></div>
                    <input type="submit" value="Lưu" name="submit" id="btn-luu"> <br>
                </form>

        </div>
</body>
</html>