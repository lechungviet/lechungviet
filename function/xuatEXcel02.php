<?php
    require_once("../xuly.php");
    if(isset($_SESSION['login']))
        $user=$_SESSION['login'];
    else 
        $user='';
    if($user==''){
        header("location: ../dangnhap.php");
    }
?>
<?php
   $output='';
   $sql='SELECT donhang.mamh, mathang.tenmh, sum(donhang.soluong) as "tongsl" FROM donhang INNER JOIN mathang on donhang.mamh=mathang.mamh WHERE MONTHNAME(donhang.ngaydh)=MONTHNAME(date(now())) GROUP BY mathang.mamh'; 
    $nsxlist=executeResult($sql);
    $output.='
    <table id="bang" class="table_boder">
    <thead>
            <tr>
                <th>Tên mặt hàng</th>
                <th>Tổng số lượng</th>
                <th>Giá / 1 sản phẩm</th>
                <th>Tổng doanh thu</th>
            </tr>
    </thead>
    <tbody>';
    foreach ($nsxlist as $std) {
        $giaSP=laygia($std['mamh']);
        $tongdoanhthu=$giaSP*$std['tongsl'];
        $dinhdangtienSPham=number_format($giaSP);
        $dinhdangTienDThu = number_format($tongdoanhthu);
        $output.= '
            <tr>
                <td>'.$std['tenmh'].'</td>
                <td>'.$std['tongsl'].'</td>
                <td>'.$dinhdangtienSPham.'</td>
                <td>'.$dinhdangTienDThu.'</td>
            </tr>';
    }
    $output.='    </tbody>
    </table>';
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename= baocaothang.xls");
    echo $output;
?>