<?php
    require 'connect.php';
    require 'head.php';

    // Lấy ID lớn nhất
    $getMaxId = "select count(*) as maxid from hoadon";
    $result = $conn->query($getMaxId);
    $row = $result->fetch_assoc();
    $nextId = $row['maxid']+1;

    $payment = $_POST['payment'];

   $ok=0;

    // Tạo hoá đơn :  các trang thái đơn chưa thanh toán =0; đã thanh toán = 1; huy don = -1
    $addBill = "insert into hoadon values($nextId, '{$_SESSION['email']}', null, $payment, sysdate(), 0,0)";
    
    if($conn->query($addBill)) $ok=1;

    // Tạo chi tiết hoá đơn
    $tonghd=0;
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart']) && $ok=1) {
        foreach ($_SESSION['cart'] as $item) {
            $sql = "select * from sanpham s 
                join sizecuasanpham sz on sz.MASP=s.MASP
                where sz.MASP = '{$item['id']}'";
            $result = $conn->query($sql);
            $sp = $result->fetch_assoc();
            $masp = $item['id'];
            $masize = $item['size'] ;
            $soluong = $item['quant']; 
            if (isset($item['level'])){
                $docay = $item['level'];
            } else $docay = null;
            $dongia = $sp['DONGIASP'];
            $tongtien = $sp['DONGIASP']*$item['quant'];
            $tonghd+= $tongtien;
           

            $addBillDetail = "insert into chitiethoadon values ($nextId,'$masp','$masize',$soluong,'$docay',$dongia);";
            if($conn->query($addBillDetail)) $ok=1;
            else{
                $ok=0;
                break;
            }

        }
    }
    // cập nhat lại tổng tiền của hóa đơn, chưa test đc, tại kh đặt hàng được
    $themtong = "UPDATE hoadon SET TONGTIEN=$tonghd WHERE MAHOADON =$nextId";

    // Tạo giao hàng
    $mkv = $_GET['khuvuc'];
    $ghichu = $_GET['ghichu'];
    $phi = $_GET['phigiao'];
    $addTrans = "insert into giaohang values ('$mkv',$nextId, $phi, '$ghichu')";
    $conn->query($addTrans);

    // // Xoá giỏ hàng
    $_SESSION['cart'] = array();
    $_SESSION['slsp'] = 0;

    // Về trang chủ
    header("Refresh: 5; url=index.php");

?>

<!-- <html style="background-color: #ff9702 !important; margin: 0 !important; padding: 0 !important;"> -->

<div style="width: 100%; height: 100%; background-color: #ff9702 !important;">
    <div class="noti">
        <i style="color: green; font-size: 50px; margin-top: 9px; margin-right: 15px;"
            class="fas fa-check-circle fa-lg"></i>
        <h1>Đặt hàng thành công !</h1>
        <a href="chitiethoadon">
            <h4>Xem chi tiết đơn mua hàng</h4>
        </a>
        <p>Tự động quay về trang chủ sau 5s...</p>
        <a href="index.php"><button class="return-btn">Về trang chủ</button></a>
    </div>
</div>
<!-- </html> -->

<style>
.noti {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40%;
    height: 60%;
    border-radius: 25px;
    background-color: white;
    color: black;
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
    display: flex;
    orientation: portrait;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.return-btn {
    padding: 10px 25px;
    background-color: #ff9702;
    color: white;
    border: none;
    border-radius: 99px;
    margin-top: 20px;
}
</style>