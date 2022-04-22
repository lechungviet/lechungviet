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
                   <span>Danh sách mặt hàng</span>
                   <button id="btn-them">
                        <a href="quantri-mathang-them.php">+Thêm</a>
                    </button></td>
                </div>
                <table id="bang" class="table_boder">
                    <thead>
                            <tr>
                                <th>Mã mặt hàng</th>
                                <th>Tên mặt hàng</th>
                                <th>Nhà sản xuất</th>
                                <th>Loại hàng</th>
                                <th>Số Lượng</th>
                                <th>Hình</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                    </thead>
                    <tbody>
    <?php
    $sql='select *from mathang'; 
    $nsxlist=executeResult($sql);
    foreach ($nsxlist as $std) {
        $duongdan="./hinh/".$std['hinh'];
        $nhasx= layTenNSX($std['mansx']);
        $loaihang= layTenLoaiHang($std['malh']);
        echo '
                    <tr>
                        <td>'.$std['mamh'].'</td>
                        <td>'.$std['tenmh'].'</td>
                        <td>'.$nhasx.'</td>
                        <td>'.$loaihang.'</td>
                        <td>'.$std['soluong'].'</td>
                        <td id="hinh-khoa">
                            <img src="'.$duongdan.'" alt="">
                        </td>
                        <td>'.$std['mota'].'</td>
                        <td>'.number_format($std['gia']).'</td>
                        <td id="sua">
                            <button id="btn-sua">
                                <a href="quantri-mathang-sua.php?id='.$std['mamh'].'">Sửa</a>
                            </button></td>
                        <td id="xoa">
                            <button id="btn-xoa">
                                <a href="function/xoa-mathang.php?id='.$std['mamh'].'">Xóa</a>
                            </button>
                        </td>
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