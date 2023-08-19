<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
include "head.php";
include "connect.php"
?>

<body class="biolife-body">

    <!-- Preloader -->
    <!-- <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div> -->

    <!-- HEADER -->
    <?php
    include "header.php"
    ?>




    <div class="page-contain login-page">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">
                <form action="xacnhandathang.php" method="get">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="signin-container">
                                <h2>Thông tin người nhận</h2>
    
                                <p class="form-row">
                                    <label for="fid-name">Tên:<span class="requite">*</span></label>
                                    <input type="text" id="fid-name" name="hoten"
                                        value="<?php echo  $_SESSION["hoten"] ?>" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-pass">Số điện thoại:<span class="requite">*</span></label>
                                    <input type="text" id="fid-sdt" name="sdt" value="<?php echo $_SESSION["sdt"]?>"
                                        class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-name">Địa chỉ:<span class="requite">*</span></label>
                                    <?php
                                        $string = $_GET['area'];
                                        $kv = preg_replace('/[0-9]/', '', $string);
                                        switch ($kv) {
                                            case 'NK':
                                                $tkv = 'Ninh Kiều';
                                                break;
                                            case 'BT':
                                                $tkv = 'Bình Thuỷ';
                                                break;
                                            case 'CR':
                                                $tkv = 'Cái Răng';
                                                break;
                                            default:
                                                $tkv = 'Cần Thơ';
                                                break;
                                        }
                                        $sql = "select * from khuvuc where MAKHUVUC = '{$_GET['area']}'";
                                        $result = $conn->query($sql);
                                        $row = $result->fetch_assoc();
                                    ?>
                                    <input disabled type="text" id="fid-name" name="diachi"
                                        value="<?php echo $row["TENKHUVUC"]?> - Quận <?php echo $tkv ?>" class="txt-input">
                                </p>
                            </div>
                        </div>
    
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="signin-container">
                                <h2>Thông tin đơn hàng</h2>
                                <?php
                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                        echo '<table>';
                                        echo '<tr><th>Tên SP</th><th>Size</th><th>Số lượng</th><th>Đơn giá</th><th>Tổng tiền</th></tr>';
                                        $tongtien = 0;
                                        foreach ($_SESSION['cart'] as $item) {
                                            $sql = "select * from sanpham s 
                                                    join sizecuasanpham sz on sz.MASP=s.MASP
                                                    where sz.MASP = '{$item['id']}'";
                                            $result = $conn->query($sql);
                                            $sp = $result->fetch_assoc();
                                                
                                            echo '<tr>';
                                            echo '<td>' . $sp['TENSP'] . '</td>';
                                            echo '<td>' . $item['size'] . '</td>';
                                            echo '<td>' . $item['quant'] . '</td>';
                                            echo '<td>' . number_format($sp['DONGIASP']) . ' đ</td>';
                                            echo '<td>' . number_format($sp['DONGIASP']*$item['quant']) . ' đ</td>';
                                            echo '</tr>';
                                            $tongtien += ($sp['DONGIASP']*$item['quant']);
                                        }
                                    
                                        echo '</table>';
                                    }
                                ?>
                                <div style="text-align: right;">
                                    <h4>Tổng tiền: <span style="font-weight: bold;"><?php echo number_format($tongtien) ?> đ</span></h4>
                                    <h4>Phí ship: <span style="font-weight: bold;"><?php echo number_format($row['PHIGIAO']) ?> đ</span></h4>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 40px;">
                        <div style="text-align: center;" class="col-12 center">
                            <h3>Tổng thiệt hại: <span style="font-weight: bold;"><?php echo number_format($tongtien+$row['PHIGIAO']) ?> đ</span></h3>
                            <button style="margin-top: 15px; padding: 10px 20px; background-color: #ff9702; color: white; border:none; border-radius: 15px;" type="submit"><span style="font-size: 17px; font-weight: bold;">Xác nhận đặt hàng</span></button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>
    <?php
    include"footer.php"
    ?>
    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/biolife.framework.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>