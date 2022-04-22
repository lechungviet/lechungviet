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
                   <span>Thống kê doanh thu được bán trong tháng hiện tại</span>
                   <button id="btn-them">
                        <a href="./function/xuatEXcel02.php">Xuất file EX</a>
                    </button></td>
                </div>
                <table id="bang" class="table_boder">
                    <thead>
                            <tr>
                                <th>Tên mặt hàng</th>
                                <th>Tổng số lượng</th>
                                <th>Giá / 1 sản phẩm</th>
                                <th>Tổng doanh thu</th>
                            </tr>
                    </thead>
                    <tbody>
    <?php
    $sql='SELECT donhang.mamh, mathang.tenmh, sum(donhang.soluong) as "tongsl" FROM donhang INNER JOIN mathang on donhang.mamh=mathang.mamh WHERE MONTHNAME(donhang.ngaydh)=MONTHNAME(date(now())) GROUP BY mathang.mamh'; 
    $nsxlist=executeResult($sql);
    // var_dump( $nsxlist);
    foreach ($nsxlist as $std) {
        $giaSP=laygia($std['mamh']);
        $tongdoanhthu=$giaSP*$std['tongsl'];
        $dinhdangtienSPham=number_format($giaSP);
        $dinhdangTienDThu = number_format($tongdoanhthu);
        echo '
            <tr>
                <td>'.$std['tenmh'].'</td>
                <td>'.$std['tongsl'].'</td>
                <td>'.$dinhdangtienSPham.'</td>
                <td>'.$dinhdangTienDThu.'</td>
            </tr>';
    }
    ?>
                    </tbody>
                </table>
        </div>
</body>
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
</html>