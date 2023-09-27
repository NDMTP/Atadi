<?php
include('connect.php');

$email = $_POST['email'];
$noidung= $_POST['noidung'];
$chatluong= $_POST['danhgia'];
$hd= $_POST['hoadon'];
$masp= $_POST['masp'];

    $target_dir = "assets/images/comment/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $path = basename($_FILES["fileToUpload"]["name"]);
    if (file_exists($target_file)) {
        echo "Tệp đã tồn tại.";
        $uploadOk = 0;
    }
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Tệp quá lớn.";
        $uploadOk = 0;
    }

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Chỉ cho phép tải lên các tệp ảnh JPG, JPEG, PNG, GIF.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Tải tệp lên thất bại.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Lưu thông tin vào cơ sở dữ liệu (ví dụ: tên tệp và đường dẫn)
          
           // $filepath = $target_file;
            
            $anh = "INSERT INTO anhdanhgia VALUES ('$path','$masp','$email')";
            $result_anh = $conn->query($anh);
            
            if ($result_anh ) {
                echo "Tải tệp lên thành công và lưu vào cơ sở dữ liệu.";
            } else {
                echo "Lỗi khi lưu vào cơ sở dữ liệu: " . $conn->error;
            }
        } else {
            echo "Có lỗi xảy ra khi tải tệp lên.";
        }
    }
    // ====================================

// echo $noidung.'<br>';
// echo $chatluong.'<br>';
$sql = "INSERT INTO danhgiasp(EMAIL, MAHOADON, NOIDUNGDG, CHATLUONGSP,LINKANHDG) 
VALUES ('$email','$hd','$noidung','$chatluong','$path')";
$result = $conn->query($sql);

echo '<script language="javascript">
                    history.back();
                     </script>';


   