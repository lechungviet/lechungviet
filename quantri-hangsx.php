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
                   <span>Danh sách hãng sản xuất</span>
                   <button id="btn-them">
                        <a href="quantri-hangsx-them.php">+Thêm</a>
                    </button></td>
                </div>
                <table class="table_boder">
                    <thead>
                            <tr>
                                <th>Mã hãng sản xuất</th>
                                <th>Tên hãng sản xuất</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                    </thead>
                    <tbody>
    <?php
    $sql='select *from nhasx'; //lấy danh sách tất cả nhà sản xuất trong database
    $nsxlist=executeResult($sql);
    foreach ($nsxlist as $std) {
        echo '
                    <tr>
                        <td>'.$std['mansx'].'</td>
                        <td>'.$std['tennsx'].'</td>
                        <td id="sua">
                            <button id="btn-sua">
                                <a href="quantri-hangsx-sua.php?id='.$std['mansx'].'">Sửa</a>
                            </button></td>
                        <td id="xoa">
                            <button id="btn-xoa">
                                <a href="function/xoa-hangsx.php?id='.$std['mansx'].'">Xóa</a>
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