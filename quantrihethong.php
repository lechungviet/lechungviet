<?php
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
    <div class="xepchong">
        <?php include('menu-quantri.php'); ?>
        <div class="container-admin">
            <div class="nav">

            </div>
        </div>
    </div>
</body>
</html>