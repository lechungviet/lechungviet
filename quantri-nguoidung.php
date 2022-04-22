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
                   <span>Danh sách người dùng</span>
                </div>
                <table class="table_boder">
                    <thead>
                            <tr>
                                <th>Tên người dùng</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Xóa</th>
                            </tr>
                    </thead>
                    <tbody>
    <?php
    $sql='SELECT * FROM nguoidung'; 
    $nsxlist=executeResult($sql);
    foreach ($nsxlist as $std) {
        echo '
                    <tr>
                        <td>'.$std['hoten'].'</td>
                        <td>'.$std['email'].'</td>
                        <td>'.$std['diachi'].'</td>
                        <td>'.$std['sdt'].'</td>
                        
                        <td id="xoa">
                            <button id="btn-xoa">
                                <a href="function/xoa-nguoidung.php?id='.$std['email'].'">Xóa</a>
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