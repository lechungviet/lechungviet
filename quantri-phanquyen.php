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
                                <th>Tên đăng nhập</th>
                                <th>Mật khẩu</th>
                                <th>Tên người dùng</th>
                                <th>Quyền</th>
                            </tr>
                    </thead>
                    <tbody>
    <?php
    $sql='SELECT dangnhap.email,dangnhap.password,nguoidung.hoten,dangnhap.quyen
    from dangnhap
    INNER JOIN nguoidung on dangnhap.email=nguoidung.email';
    $nsxlist=executeResult($sql);
    foreach ($nsxlist as $std) {
        echo '
                    <tr>
                        <td>'.$std['email'].'</td>
                        <td>'.$std['password'].'</td>
                        <td>'.$std['hoten'].'</td>';
                echo'   <td>';loadCombo($std['email'],$std['quyen']);     echo'</td>
                    </tr>';
    }
    ?>
                    </tbody>
                </table>
        </div>
</body>
</html>