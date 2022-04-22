<?php
    if(isset($_GET["action"]))
        $ctl=$_GET["action"];
    else $ctl="";
    echo'
    <div class="chucnang">
        <div class="danhsachchucnang">
            <div class="button" id="Dashboard">
                <img src="hinh/dashboard-icon.png" alt="">
                <span>Dashboard</span>
            </div>
            <div class="dropdown">';
                if($ctl==="quan-tri-khoa"||$ctl==="quan-tri-monhoc"||$ctl==="quan-tri-cauhoi")
                    echo' <div class="button" id="QuanTriHeThong" style="background-color:rgb(28, 28, 160);">';
                else
                    echo '<div class="button" id="QuanTriHeThong">';
    echo '
                    <img src="hinh/quantri-icon.png" alt="">
                    <span>Quản trị hệ thống</span>
                    <div class="dropdown-content">
                        <a href="quantri-hangsx.php">Hãng sản xuất</a>
                        <a href="quantri-loaihang.php">Loại hàng</a>
                        <a href="quantri-mathang.php">Mặt hàng</a>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="button" id="QuanLyNguoiDung"> 
                    <img src="hinh/nguoidung-icon.png" alt="">
                    <span>Quản lí người dùng</span>
                    <div class="dropdown-content">
                        <a href="quantri-nguoidung.php">Người dùng</a>
                        <a href="quantri-phanquyen.php">Phân quyền</a>
                    </div>
                </div>
            </div>
            <div class="button" id="Lslambai">
                <img src="hinh/history.png" alt="">
                <span><a href="quantri-dondathang.php" style="text-decoration: none; color: white">Đơn đặt hàng</a></span>
            </div>
           <div class="button">
                <img src="hinh/logout.png" alt="">
                <span><a href="index.php" style="text-decoration: none; color: white">Về trang chủ</a></span>
            </div>
        </div>
    </div>
    ';
?>
