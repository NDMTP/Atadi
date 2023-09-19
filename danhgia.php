<?php
include('connect.php');
$email = $_GET['email'];
$noidung= $_GET['noidung'];
$chatluong= $_GET['danhgia'];
$hd= $_GET['hoadon'];
// echo $noidung.'<br>';
// echo $chatluong.'<br>';
$sql = "INSERT INTO danhgiasp(EMAIL, MAHOADON, NOIDUNGDG, CHATLUONGSP) 
VALUES ('$email','$hd','$noidung','$chatluong')";
$result = $conn->query($sql);
echo '<script language="javascript">
                    history.back();
                     </script>';
?>