<?php
    require_once('xuly.php');
    if(isset($_SESSION['login'])){
        $user=$_SESSION['login'];
    }
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
   <!-- <?php include('menu-quantri.php'); ?> -->
    <div class="container-admin2">
        <div class="nav2">
        </div>
        <div class="container">
                <div class="heding">
                   <span>Danh sách đơn đặt hàng</span>
                </div>
                <table class="table_boder">
                    <thead>
                            <tr>
                                <th>Mã đơn đặt hàng</th>
                                <th>Tên mặt hàng</th>
                                <th>Size</th>
                                <th>Số lượng</th>
                                <th>Giá / 1 sản phẩm</th>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Ngày đặt hàng</th>
                                <th>Trạng thái</th>
                                <th>Hủy đơn hàng</th>
                                
                            </tr>
                    </thead>
                    <tbody>
    <?php
    $iduser=$user[0]['iduser'];
    $sql="SELECT * FROM donhang where iduser='$iduser' ORDER BY ngaydh DESC"; 
    $nsxlist=executeResult($sql);
    foreach ($nsxlist as $std) {
        $madonhang=$std['iddonhang'];
        $user=getUser($std['iduser']);
        $tenKH=$user[0]['hoten'];
        $email=$user[0]['email'];
        $diachi=$user[0]['diachi'];
        $sdt=$user[0]['sdt'];
        $tenmh=layTenMatHang($std['mamh']);
        $soluong=$std['soluong'];
        $size=$std['size'];
        $gia=layGia($std['mamh']);
        $ngay=$std['ngaydh'];
        //$trth=$std['trangthai'];
        if($std['trangthai'] == 0) $trth= 'Đang xử lí' ;
        if($std['trangthai'] == 1) $trth= '<p style="color: red" > Đã giao hàng </p>' ;
        echo '
                    <tr>
                        <td>'.$madonhang.'</td>
                        <td>'.$tenmh.'</td>
                        <td>'.$size.'</td>
                        <td>'.$soluong.'</td>
                        <td>'.$gia.'</td>
                        <td>'.$tenKH.'</td>
                        <td>'.$email.'</td>
                        <td>'.$diachi.'</td>
                        <td>'.$sdt.'</td>
                        <td>'.$ngay.'</td>
                        <td>'.$trth.'</td>
                        <td id="xoa">
                            <button id="btn-xoa">
                                <a href="function/huy-donhang.php ?id='.$std['iddonhang'].'">Hủy</a>
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