<?php
    require 'connect.php';
    require 'head.php';

    // Lấy ID lớn nhất
    $getMaxId = "select max(MAHOADON) as maxid from hoadon";
    $result = $conn->query($getMaxId);
    $row = $result->fetch_assoc();
    $nextId = $row['maxid']+1;
    $payment = $_GET['payment'];
    
    $ok=0;
    // Tạo hoá đơn :  các trang thái đơn chưa thanh toán =0; đã thanh toán = 1; huy don = -1
    if (isset($_SESSION['makm'])) 
        $addBill = "insert into hoadon values($nextId, '{$_SESSION['email']}', '{$_SESSION['makm']}', $payment, sysdate(), 0,0)";
    else $addBill = "insert into hoadon values($nextId, '{$_SESSION['email']}', null, $payment, sysdate(), 0,0)";

    if($conn->query($addBill)) $ok=1;

    // Tạo chi tiết hoá đơn
    $tonghd=0;
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart']) && $ok=1) {
        foreach ($_SESSION['cart'] as $item) {
            $sql = "select * from sanpham s 
                join sizecuasanpham sz on sz.MASP=s.MASP
                where sz.MASP = '{$item['id']}' and sz.MASIZE = '{$item['size']}'";
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
           

            $addBillDetail = "insert into chitiethoadon values ($nextId,'$masp','$masize',$soluong,'$docay',$dongia,$tongtien);";
            echo $addBillDetail;
            if($conn->query($addBillDetail)){
                $ok=1;
            } 
            else{
                $ok=0;
                break;
            }

        }
    }
    if ($ok){
        // cập nhat lại tổng tiền của hóa đơn, chưa test đc, tại kh đặt hàng được
        if (isset($_SESSION['makm'])){
            $km = "select PHANTRAMKM from khuyenmai where MAKM = '{$_SESSION['makm']}'";
            $result = $conn->query($km);
            if ($result->num_rows>0){
                $row = $result->fetch_assoc();
                $tonghd -= $tonghd*($row['PHANTRAMKM']/100);
            }
        }
        
        $themtong = "UPDATE hoadon SET TONGTIEN=$tonghd WHERE MAHOADON =$nextId";
        $conn->query($themtong);
    
        // Tạo giao hàng
        $mkv = $_GET['khuvuc'];
        $ghichu = $_GET['ghichu'];
        $phi = $_GET['phigiao'];
        $addTrans = "insert into giaohang values ('$mkv',$nextId, $phi, '$ghichu')";
        $conn->query($addTrans);
    
        // // Xoá giỏ hàng
        $_SESSION['cart'] = array();
        $_SESSION['slsp'] = 0;
    
        if ($payment==1){
            // Về trang chủ
            header("Refresh: 5; url=index.php");
        }
    } else {
        echo "Error";
    }

?>

<!-- <html style="background-color: #ff9702 !important; margin: 0 !important; padding: 0 !important;"> -->

<div style="width: 100%; height: 100%; background-color: #ff9702 !important;">
    <div class="noti">
        <i style="color: green; font-size: 50px; margin-top: 15px; margin-right: 15px;"
            class="fas fa-check-circle fa-lg"></i>
        <h1 >Đặt hàng thành công !</h1>
        <a href="chitiethoadon.php?hdid=<?php echo $nextId ?>" target="_blank">
            <h4>Xem chi tiết đơn mua hàng</h4>
        </a>
        <a href="index.php"><button class="return-btn">Về trang chủ</button></a>
        <?php
            switch ($payment) {
                case '1':
                    echo '<p class="mt-3">Tự động quay về trang chủ sau 5s...</p>';
                    break;
                
                case '2':
                    echo '<p class="text" style="margin-top: 2rem;"><strong>Vui lòng chuyển khoản theo thông tin bên dưới</strong></p>';
                    echo '<p class="text">Tên tài khoản: <strong>MI CAY ATADI</strong></p>';
                    echo '<p class="text">Ngân hàng: <strong>MBBANK</strong> - Số tài khoản: <strong>9999999902002</strong></p>';
                    echo '<p class="text">Nội dung chuyển khoản: <strong>ATADI_BANKING_'.$nextId.' </strong></p>';
                    break;

                case '3':
                    ?>
                        <span style="margin-top: 20px;">
                            <strong>
                                Vui lòng thanh toán qua các ví sau:
                            </strong>
                        </span>
                        <div class="row" style="margin-top: 2rem">
                            <div class="col-sm-6 col-md-6 vdt">
                                <p class="mt-2 text"><strong>Momo:</strong></p><img style="width: 200px" src="assets/images/momo.jpg" alt="">;
                                <p class="text">Nội dung: <strong>ATADI_MOMO_<?php echo $nextId ?></strong></p>
                            </div>
                            <div class="col-sm-6 col-md-6 vdt">
                                <p class="mt-2 text"><strong>VNPAY:</strong></p><img style="width: 200px" src="assets/images/vnpay.jpg" alt="">; 
                                <p class="text">Nội dung: <strong>ATADI_VNPAY_<?php echo $nextId ?></strong></p>
                            </div>
                        </div>
                    <?php
                    break;
 
                default:
                    # code...
                    break;
            }
        ?>
    </div>
</div>
<!-- </html> -->

<style>

.vdt {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.text{
    font-size: 15px;
}

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