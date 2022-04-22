<?php
    require_once("../xuly.php")
?> 
<?php
if (isset($_POST['submit'])) {
    if ($_FILES['uploadFile']['name'] != NULL) {
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
            
            // Nếu là ảnh tiến hành code upload
            $path = "../hinh/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name'];
            $name = $_FILES['uploadFile']['name'];
            // Upload ảnh vào thư mục images
            move_uploaded_file($tmp_name, $path . $name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
                                      // Insert ảnh vào cơ sở dữ liệu
            $id=$_POST["id"];
            $tenmh=$_POST["tenmh"];
            $mansx=$_POST["mansx"];
            $malh=$_POST["malh"];
            $soluong=$_POST["soluong"];
            $hinh=$name;
            $mota=$_POST["mota"];
            $gia=$_POST["gia"];
            $sql="UPDATE mathang SET tenmh='$tenmh', mansx='$mansx', malh='$malh', soluong='$soluong', hinh='$hinh', mota='$mota', gia='$gia'  WHERE mamh= $id";
            execute($sql);
            header("location: ../quantri-mathang.php");
        } else {
            // Không phải file ảnh
            echo "Kiểu file không phải là ảnh";
        }
    } else {
        echo "Bạn chưa chọn ảnh upload";
    }
    
}
?>