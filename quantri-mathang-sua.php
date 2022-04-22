<?php
    require_once('xuly.php');
    if(isset($_SESSION['login']))
        $user=$_SESSION['login'];
    else 
        $user='';
?>
<?php
    $id=$_GET["id"];
    $tenmh=layTenMatHang($id);
    $tennsx=layTenNSX(layIDNsx($id));
    $tenlh=layTenLoaiHang(layIDLh($id));
    $soluong=layDungTich($id);
    $mota=layMoTa($id);
    $gia=layGia($id);
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
                   <span>Sửa mặt hàng</span>
                   <button id="btn-them">
                        <a href="quantri-mathang.php">Danh sách</a>
                    </button></td>
                </div>
                <form action="./function/sua-mathang.php" method="post" id="form-themkhoa" enctype="multipart/form-data">
                    <input type="text" name="id" value="<?php echo "$id"; ?>" style="display: none;">
                    <label> Tên mặt hàng: </label> <br>
                    <input type="text" name="tenmh" placeholder="Nhập tên mặt hàng" value="<?php echo "$tenmh"; ?>"> <br> <div class="khoancach"></div>
                     <label> Nhà sản xuất: </label> <br>
                    <select name="mansx" id="">
                    <?php
                        $sql="select *from nhasx";
                        $nhasxlist=executeResult($sql);
                        foreach ($nhasxlist as $std) {
                            if($std['mansx']===layIDNsx($id))
                                echo '
                                    <option value="'.$std['mansx'].'" selected>'.$std['tennsx'].'</option>
                                ';
                            else
                                echo '
                                    <option value="'.$std['mansx'].'">'.$std['tennsx'].'</option>
                                ';
                        }
                    ?>
                    </select> <div class="khoancach"></div>
                     <label> Loại hàng: </label> <br>
                    <select name="malh" id="">
                    <?php
                        $sql="select *from loaihang";
                        $loaihanglist=executeResult($sql);
                        foreach ($loaihanglist as $std) {
                            if($std['malh']===layIDLh($id))
                                echo '
                                    <option value="'.$std['malh'].'" selected>'.$std['tenlh'].'</option>
                                ';
                            else
                                echo '
                                    <option value="'.$std['malh'].'">'.$std['tenlh'].'</option>
                                ';
                        }
                    ?>
                    </select> <div class="khoancach"></div>
                     <label> Số lượng: </label> <br>
                    <input type="text" name="soluong" placeholder="Nhập số lượng" value="<?php echo "$soluong"; ?>"> <br> <div class="khoancach"></div>
		            <div style="margin-left: 10%;">Chọn hình ảnh</div><input type="file" name="uploadFile"><br>
                     <label> Mô tả sản phẩm: </label> <br>
                    <textarea placeholder="Mô tả chi tiết sản phẩm..." name="mota"><?php echo "$mota"; ?></textarea> <br> <div class="khoancach"></div>
                     <label> Giá sảm phẩm: </label> <br>
                    <input type="text" name="gia" placeholder="Nhập giá bán" value="<?php echo "$gia"; ?>"> <br> <div class="khoancach"></div>
                    <input type="submit" value="Lưu" name="submit" id="btn-luu"> <br>
                </form>

        </div>
</body>
</html>