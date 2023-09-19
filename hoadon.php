<!DOCTYPE html>
<html class="no-js" lang="en">


<?php
    require 'head.php';
    require 'connect.php';
?>

<body class="biolife-body">


    <!-- HEADER -->
    <?php require 'header.php' ?>

    <!--Hero Section-->
    <div class="hero-section hero-background">
    </div>

    <div class="page-contain shopping-cart">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                <!--Cart Table-->
                <div class="shopping-cart-container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 style="margin-top: 20px;" class="box-title">Lịch sử đơn hàng</h3>
                            <?php
                            $sql = "SELECT * FROM nguoidung, hoadon WHERE hoadon.EMAIL = nguoidung.EMAIL AND hoadon.EMAIL ='".$_SESSION['email']."'";
                            $result = $conn->query($sql);
                                       $status= " "  ;           
                            while ($row = $result->fetch_assoc()) {
                                              if($row["TRANGTHAIHOADON"]==1){
                                                $status ="Đã Thanh toán";
                                              } 
                                              elseif($row["TRANGTHAIHOADON"]==0){
                                                $status ="Chưa Thanh toán";
                                              }   
                                              else{
                                                $status ="Đã Hủy";
                                              }      
                                                ?>
                            <table class="table"
                                style="margin-top: 3rem ;  border: 1px solid #ccc ;box-shadow: 10px 10px 10px #E6E6E6;">
                                <thead>
                                    <tr>
                                        <td scope="col" style="float:left; border: 2px soild "
                                            class="product-thumbnail">
                                            <button type="button" class="btn btn-light"><a href="index.php">Về Trang
                                                    Chủ</a></button>
                                        </td>
                                        <td class="product-price"></td>
                                        <td class="product-quantity"></td>
                                        <td scope="col" style="float:right; color: red ">
                                            <?php echo $status ?> </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $cthd = "SELECT * FROM chitiethoadon WHERE MAHOADON = '".$row['MAHOADON']."'";;
                                        $cthd_result = $conn->query($cthd);
                                        while($row1 = $cthd_result->fetch_assoc() ){

                                            $masp = preg_replace('/[0-9]/', '', $row1['MASP']);
                                            $sp = "SELECT * FROM sanpham WHERE MASP = '".$row1['MASP']."'";
                                            $kq = $conn->query($sp);
                                            $sp = $kq->fetch_assoc();
                                    ?>
                                    <tr class="pd cart_item">
                                        <td class="product-thumbnail" data-title="Product Name" style="float:left ">
                                            <a class="prd-thumb" href="#">
                                                <figure><img width="113" height="113"
                                                        src="assets/images/products/<?php echo $masp."/".$sp['LINKANH']?>"
                                                        alt="shipping cart"></figure>
                                            </a>
                                            <a class="prd-name"
                                                href="#"><?php echo $sp['TENSP']." - Size: ".$row1['MASIZE']?></a>

                                        </td>
                                        <td class="product-price" data-title="Price" style="padding-top:4.5rem">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span
                                                            class="currencySymbol"></span><?php echo number_format($row1['DONGIABAN']) ?>
                                                        đ</span></ins>
                                            </div>
                                        </td>
                                        <td style="padding-top:5rem">
                                            <b>Số lượng: <?php echo $row1['SOLUONGSP'] ?></b>

                                        </td>
                                        <td style="padding-top:5rem">
                                            <b><?php echo $row1['TONGTIEN'] ?> đ</b>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    <tr>
                                        <td scope="col" style="float:left; border: 2px soild "
                                            class="product-thumbnail">

                                        </td>
                                        <td class="product-price"></td>
                                        <td class="product-quantity">

                                        </td>
                                        <td scope="col">
                                            <button type="button" class="btn btn-danger" style="margin-right:2.5rem">
                                                <a href="#" style="color:white ">Mua Lại</a>
                                            </button>
                                            <button type="button" class="btn btn-outline-dark"
                                                style=" background: black; ">
                                                <a href="#" style="color:white"> Đánh giá</a>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <?php
                             }
                                // } else {
                                //     echo '<div class="shpcart-subtotal-block">';
                                //     echo '<h2>Không có sản phẩm nào trong giỏ hàng</h2>';
                                //     echo '<div class="btn-checkout">';
                                //     echo '   <a href="category-grid.php" class="btn checkout w-25">Xem tất cả sản phẩm</a>';
                                //     echo '</div>';
                                //     echo '</div>';
                                    
                                // }
                                ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Related Product-->

    </div>
    </div>
    </div>

    <!-- FOOTER -->
    <?php  
        require 'footer.php';
    ?>

    <!-- Scroll Top Button -->
    <a class=" btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/biolife.framework.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>