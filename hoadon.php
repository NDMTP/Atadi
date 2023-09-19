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
                                    <tr class="dg">
                                        <td scope="col" style="float:left; border: 2px soild "
                                            class="product-thumbnail">

                                        </td>
                                        <td class="product-price">
                                            <section class="section_show" style="display:none;">
                                                <div class="card card-body" style="width: 50rem; margin: 2rem ;  ">
                                                    <form action="danhgia.php" method="GET"
                                                        style="border: 1px solid #ccc; height:33rem; padding:2rem">
                                                        <a style="float:right" class="close">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </a>
                                                        <div class="row" style="margin-top:2rem;">
                                                            <h3><b>Chất lượng sản phẩm:</b>
                                                            </h3>
                                                            <div
                                                                class="form-check col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                <input class="form-check-input" type="radio"
                                                                    name="danhgia" id="flexRadioDefault1" value="1">
                                                                <label class="form-check-label text-danger"
                                                                    for="flexRadioDefault1">
                                                                    <b> Kém</b>
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                <input class="form-check-input" type="radio"
                                                                    name="danhgia" id="flexRadioDefault2" value="2">
                                                                <label class="form-check-label text-warning"
                                                                    for="flexRadioDefault2">
                                                                    <b> Trung bình</b>
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                <input class="form-check-input" type="radio"
                                                                    name="danhgia" id="flexRadioDefault2" value="3">
                                                                <label class="form-check-label text-info"
                                                                    for="flexRadioDefault2">
                                                                    <b>Khá Tốt</b>
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                <input class="form-check-input" type="radio"
                                                                    name="danhgia" id="flexRadioDefault2" checked
                                                                    value="4">
                                                                <label class="form-check-label text-success"
                                                                    for="flexRadioDefault2">
                                                                    <b> Tuyệt vời</b>
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <div class="form-floating" style="margin-top: 2rem;">
                                                            <textarea class="form-control"
                                                                placeholder="Hãy chia sẽ những điều bạn thích về món ăn cho mọi người biết nhé!"
                                                                id="floatingTextarea2" style="height: 100px"
                                                                name="noidung"></textarea>

                                                        </div>
                                                        <div>

                                                            <input type="hidden" name="email"
                                                                value="<?php echo $_SESSION['email'] ?>">
                                                            <input type="hidden" name="hoadon"
                                                                value="<?php echo $row['MAHOADON'] ?>">
                                                        </div>
                                                        <div style="margin-top: 2rem;">
                                                            <button type="button" class="btn btn-outline-danger"
                                                                style="float: left">Thêm
                                                                ảnh sản phẩm</button>
                                                            <button type="submit" class="btn btn-danger"
                                                                style="float: right;">Hoàn thành</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </section>
                                        </td>
                                        <td class="product-quantity">

                                        </td>
                                        <td scope="col">
                                            <section>

                                                <button type="button" class="btn btn-danger"
                                                    style="margin-right:2.5rem">
                                                    <a href="#" style="color:white ">Mua Lại</a>
                                                    <!-- gui ma hoa don roi truy xuat dữ liệu ra, xong lấy dữ
                                                liệu đó import trở lại và đổi id hóa đơn mualai.php?mahoadon=1-->
                                                </button>

                                                <?php
                            $sql1 = "SELECT * FROM danhgiasp WHERE  MAHOADON ='".$row['MAHOADON']."'";
                            $result1 = $conn->query($sql1);
                            $kt= " "  ;           
                             if($result1->num_rows>0){
                                $kt ="Đã đánh giá";
                                    echo '
                                                    <button type="button"  style=" background: black; color:white ">
                                                    '.$kt.'
                                                    </button>
                                    ';
                                                                                   
                                }    
                              else{
                                 $kt ="Đánh giá";
                                 echo '
                                                    <button type="button" class="btn_check " style=" background: black; color:white ">
                                                    '.$kt.'
                                                    </button>
                                    ';
                                }      

                                                            ?>

                                            </section>

                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <?php
                             }
                                ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $(".btn_check").click(function() {
            var e = $(this).closest(".dg").find(".section_show");
            e.css("display", "block");
            //alert("ádd");
        });
        $(".close").click(function() {
            var e = $(this).closest(".dg").find(".section_show");
            e.css("display", "none");
        });
    });
    </script>
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