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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
</head>
<body>
    <!-- menu -->
    <?php include('menu-quantri.php'); ?>
    <div class="container-admin">
        <div class="nav">
        </div>
        <div class="container">
                <div class="heding">
                   <span>Danh sách đơn đặt hàng</span>
                </div>
                <table id="bang" class="table_boder">
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
                                <th>Xuất hàng</th>
                            </tr>
                    </thead>
                    <tbody>
    <?php
    $sql='SELECT * FROM donhang ORDER BY ngaydh DESC'; 
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
        $gia=number_format(layGia($std['mamh']));
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
                                <a href="function/xoa-dondathang.php ?id='.$std['iddonhang'].'">Hủy</a>
                            </button>
                        </td>

                        <td id="sua">
                            <button id="btn-sua">
                                <a href="function/sua-trangthai-donhang.php ?id='.$std['iddonhang'].'">Xuất hàng</a>
                            </button></td>
                    </tr>';
    }
    ?>
                    </tbody>
                </table>
        </div>

<script>
    $(document).ready(function() {
        var table = $('#bang').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            language: { url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Vietnamese.json" }
        } );
    } );
</script>
</body>
</html>