<?php
// thong tin ve chuoi ket noi gom server name, username va mat khau de dang nhap vao mysql, mac dinh cua xampp la root, password rong

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanmicay";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  
} 
session_start();

$_SESSION['dksale'] = array();
$sale = "select * from khuyenmai where sysdate()<=NGAYKT order by DIEUKIENKM desc";
$rs = $conn->query($sale);
$rsa = $rs -> fetch_all(MYSQLI_ASSOC);
foreach ($rsa as $s) {
    $_SESSION['dksale'][$s['DIEUKIENKM']] = $s['PHANTRAMKM'];
}

?>