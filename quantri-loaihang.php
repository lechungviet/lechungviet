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
                   <span>Danh sách loại hàng</span>
                   <button id="btn-them">
                        <a href="quantri-loaihang-them.php">+Thêm</a>
                    </button></td>
                </div>
                <table class="table_boder">
                    <thead>
                            <tr>
                                <th>Mã loại hàng</th>
                                <th>Tên loại hàng</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                    </thead>
                    <tbody>
    <?php
    $sql='select *from loaihang'; 
    $nsxlist=executeResult($sql);
    foreach ($nsxlist as $std) {
        echo '
                    <tr>
                        <td>'.$std['malh'].'</td>
                        <td>'.$std['tenlh'].'</td>
                        <td id="sua">
                            <button id="btn-sua">
                                <a href="quantri-loaihang-sua.php?id='.$std['malh'].'">Sửa</a>
                            </button></td>
                        <td id="xoa">
                            <button id="btn-xoa">
                                <a href="function/xoa-loaihang.php?id='.$std['malh'].'">Xóa</a>
                            </button>
                        </td>
                    </tr>';
    }
    ?>
                    </tbody>
                </table>
        </div>
</body>
</html>