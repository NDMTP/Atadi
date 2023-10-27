<?php
include('connect.php');
$trangthai = " UPDATE HOADON SET TRANGTHAIHOADON = -1 WHERE MAHOADON='".$_GET['mahd']."'"; 
$result_tt = $conn->query($trangthai);
echo '<script language="javascript">
alert("Đã hủy đơn hàng!");
history.back();
 </script>';
?>