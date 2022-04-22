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
                   <span>Thêm mặt hàng</span>
                   <button id="btn-them">
                        <a href="quantri-mathang.php">Danh sách</a>
                    </button></td>
                </div>
                <form action="./function/them-mathang.php" method="post" id="form-themkhoa" enctype="multipart/form-data">
                    <input type="text" name="tenmh" placeholder="Nhập tên mặt hàng"> <br> <div class="khoancach"></div>
                    <select name="mansx" id="">
                    <?php
                        $sql="select *from nhasx";
                        $nhasxlist=executeResult($sql);
                        foreach ($nhasxlist as $std) {
                            echo '
                                <option value="'.$std['mansx'].'">'.$std['tennsx'].'</option>
                            ';
                        }
                    ?>
                    </select> <div class="khoancach"></div>
                    <select name="malh" id="">
                    <?php
                        $sql="select *from loaihang";
                        $loaihanglist=executeResult($sql);
                        foreach ($loaihanglist as $std) {
                            echo '
                                <option value="'.$std['malh'].'">'.$std['tenlh'].'</option>
                            ';
                        }
                    ?>
                    </select> <div class="khoancach"></div>
                    <input type="text" name="soluong" placeholder="Nhập số lượng"> <br> <div class="khoancach"></div>
		            <div style="margin-left: 10%;">Chọn hình ảnh đại diện </div><input type="file" name="uploadFile"><br>
                    <div style="margin-left: 10%;">Chọn ảnh chi tiết sản phẩm</div><input name="fileupload[]" type="file" multiple="multiple" /><br>
                    <textarea placeholder="Mô tả chi tiết sản phẩm..." name="mota"></textarea> <br> <div class="khoancach"></div>
                    <input type="text" name="gia" placeholder="Nhập giá bán"> <br> <div class="khoancach"></div>
                    <input type="submit" value="Lưu" name="submit" id="btn-luu"> <br>
                </form>

        </div>
</body>
</html>