<?php
include('connect.php');
$email = $_SESSION['email'];
$noidung= $_POST['nd'];
$chatluong= $_POST['cl1'];
$hd= $_POST['hd'];
$masp= $_POST['masp'];
$targetDirectory = 'assets/images/comment/';
$sql = "INSERT INTO danhgiasp(MASP,EMAIL, MAHOADON, NOIDUNGDG, CHATLUONGSP) 
VALUES ('$masp','$email','$hd','$noidung','$chatluong')";
$result = $conn->query($sql);
//echo $_FILES['selectedFiles'];
if(isset($_FILES['selectedFiles'])){
    $uploadedFiles = $_FILES['selectedFiles'];
    foreach ($uploadedFiles['tmp_name'] as $key => $tempFilePath) {
        $fileName = $uploadedFiles['name'][$key];
        $targetFilePath = $targetDirectory . $fileName;
        if (move_uploaded_file($tempFilePath, $targetFilePath)) {
            $sql1="INSERT INTO anhdanhgia(linkanh,masp,email,mahoadon) VALUES ('$fileName','$masp','$email','$hd')";
            $rs = $conn->query($sql1);
           
        } 
    }
    echo 1;
}
else{
    echo 1;
}
   