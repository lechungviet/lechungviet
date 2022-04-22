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
            $tenmh=$_POST["tenmh"];
            $mansx=$_POST["mansx"];
            $malh=$_POST["malh"];
            $soluong=$_POST["soluong"];
            $hinh=$name;
            $mota=$_POST["mota"];
            $gia=$_POST["gia"];
            $sql="insert into mathang values('null','$tenmh','$mansx','$malh','$soluong','$hinh','$mota','$gia')";
            execute($sql);
            if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_FILES['fileupload']))) {
                $files = $_FILES['fileupload'];
                $names      = $files['name'];
                $types      = $files['type'];
                $tmp_names  = $files['tmp_name'];
                $errors     = $files['error'];
                $sizes      = $files['size'];
                $numitems = count($names);
                $numfiles = 0;
                $maxid=last_id();
                for ($i = 0; $i < $numitems; $i ++) {
                    //Kiểm tra file thứ $i trong mảng file, up thành công không
                    if ($errors[$i] == 0)
                    {
                        $numfiles++;
                        //Code xử lý di chuyển file đến thư mục cần thiết ở đây (bạn tự thực hiện)
                        move_uploaded_file($tmp_names[$i], '../hinh/'.$names[$i]);
                        $sql="INSERT INTO `chitietsp`(`id`, `mamh`, `link`) VALUES ('null','$maxid','$names[$i]')";
                        execute($sql);
                    }
                }
            }
            //
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