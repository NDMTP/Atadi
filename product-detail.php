<!DOCTYPE html>
<html class="no-js" lang="en">

<?php
    include "head.php";
    include "connect.php";

    if(isset($_GET['added'])){
        ?>
        <div id="popup" class="popup">
            <div class="popup-content">
                <p>Thêm sản phẩm vào giỏ hàng thành công! <i style="color: rgb(255, 115, 0); margin-left: 10px; " class="fas fa-check-circle fa-lg"></i></p>
            </div>
        </div>
        <style>
            .popup {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: black;
                background-color: white;
                padding: 20px;
                border-radius: 15px;
                transition: opacity 3.5s;
                z-index: 99999;
                box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.5);
            }

            .popup-content {
                text-align: center;
            }
        </style>
        <script>
            // Hiển thị popup
            function showPopup() {
                const popup = document.getElementById("popup");
                popup.style.display = "block";
                setTimeout(function() {
                    popup.style.opacity = "1";
                }, 10); // Một khoảng nhỏ để tránh transition ngay khi hiển thị
            }

            // Ẩn popup
            function hidePopup() {
                const popup = document.getElementById("popup");
                popup.style.opacity = "0";
                setTimeout(function() {
                    popup.style.display = "none";
                }, 1500); // 0.5 giây
            }

            // Tự động ẩn popup sau 0.5 giây
            setTimeout(function() {
                showPopup();
                setTimeout(function() {
                    hidePopup();
                }, 500); // 0.5 giây
            }, 0); // 0 giây (hiển thị ngay khi tải trang)
        </script>

        <?php
    }

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
        include "header.php";
    ?>

    <!--Hero Section-->
    <!-- <div class="hero-section hero-background">
        <h1 class="page-title">Organic Fruits</h1>
    </div> -->

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <!-- <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="#" class="permal-link">Natural Organic</a></li>
                <li class="nav-item"><span class="current-page">Fresh Fruit</span></li>
            </ul> -->
        </nav>
    </div>

    <div class="page-contain single-product">
        <div class="container">

            <!-- Main content -->
            <div id="main-content" class="main-content">
                
                <!-- summary info -->
                <form action="themvaogiohang.php" method="get" id="myForm">
                <div class="sumary-product single-layout">
                    <?php
                        $spid = $_GET['id'];
                        $query = "SELECT * FROM sanpham s join sizecuasanpham sz on s.MASP = sz.MASP WHERE s.MASP = '".$spid."'";
                        $result = $conn->query($query);
                        $row = $result->fetch_assoc();
                        $string = $row['MASP'];
                        // Loại bỏ các kí tự số khỏi chuỗi
                        $masp = preg_replace('/[0-9]/', '', $string);
                    ?>
                    <input type="hidden" name="pdid" value="<?php echo $spid ?>">
                    <div class="media">
                        <img src="assets/images/products/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>" alt="" width="500" height="500">
                    </div>
                    <div class="product-attribute">
                        <h3 class="title"><?php echo $row['TENSP'] ?></h3>
                        <div class="rating">
                            <p class="star-rating"><span class="width-80percent"></span></p>
                            <span class="review-count">(04 Reviews)</span>
                            <!-- <span class="qa-text">Q&amp;A</span>
                            <b class="category">By: Natural food</b> -->
                        </div>
                        <!-- <span class="sku">Sku: #76584HH</span> -->
                        <p class="excerpt"><?php echo $row['MOTA'] ?></p>
                        
                        <br>
                            <div class="price">
                                <ins><span style="" class="price-amount"><span class="currencySymbol">Size:</span></ins>
                            </div>
                            <?php
                                $size = "select * from sizecuasanpham sz join sanpham s on s.MASP=sz.MASP where sz.MASP = '".$spid."'";
                                $result = $conn->query($size);
                                if ($result->num_rows > 0) {
                                $result = $conn->query($size);
                                $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                foreach ($result_all as $szr) {
                            ?>
                            <div style="padding: 0 !important; margin: 15px !important" class="price">
                                <input required type="radio" name="size" id="" value="<?php echo $szr['MASIZE']?>"> 
                                    <ins><span style="margin-left: 15px !important" class="price-amount"><span class="currencySymbol"><?php echo $szr['MASIZE'] ?> - </span><?php echo number_format($szr['DONGIASP']) ?> đ</span></ins>
                                    <del><span class="price-amount"><span class="currencySymbol"></span><?php echo number_format($szr['DONGIASP']+10000) ?> đ</span></del>
                                </input>
                            </div>
                            <?php }} ?>
                            <?php
                                if ($masp=="MC"){
                                    ?>
                                        <div style="margin-top: 25px !important">
                                            <span class="title">Cấp độ:</span>
                                            <div style="margin-top: 15px !important; width: 20% !important;" class="form_combobox w-100">
                                                <select style="color: black !important; margin-left: 10px !important; " name="level">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php
                                }
                            ?>

                        <!-- <div class="shipping-info">
                            <p class="shipping-day">3-Day Shipping</p>
                            <p class="for-today">Pree Pickup Today</p>
                        </div> -->
                        <div class="action-form" style="width: 100% !important; background-color: white !important;">
                        </div>
                    </div>
                    <div class="action-form">
                        <div class="quantity-box">
                            <span class="title">Số lượng:</span>
                            <div style="width: 100% !important;" class="qty-input">
                                <input style="width: 100% !important;" type="text" name="qty12554" value="1" data-max_value="20" data-min_value="1" data-step="1">
                                <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="buttons">
                            <button type="submit" name="sb_giohang" style="min-width: 100% !important;" class="btn add-to-cart-btn">Thêm vào giỏ hàng</button>
                            <button type="submit" name="sb_dathang" style="min-width: 100% !important;" class="btn buy-now-btn">Đặt hàng ngay</button>
                        </div>
                        <!-- <div class="location-shipping-to">
                            <span class="title">Ship to:</span>
                            <select name="shipping_to" class="country">
                                <option value="-1">Select Country</option>
                                <option value="america">America</option>
                                <option value="france">France</option>
                                <option value="germany">Germany</option>
                                <option value="japan">Japan</option>
                            </select>
                        </div> -->
                        <div class="social-media">
                            <ul class="social-list">
                                <li><a href="#" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="acepted-payment-methods">
                            <ul class="payment-methods">
                                <li><img src="assets/images/card1.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card2.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card3.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card4.jpg" alt="" width="51" height="36"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </form>
                <script>
                    document.getElementById("myForm").addEventListener("submit", function(event) {
                        const submitButton = event.submitter;

                        if (submitButton.name === "sb_giohang") {
                            this.action = "themvaogiohang.php"; // Thay đổi trang khi nhấp nút "Submit for Page 1"
                        } else if (submitButton.name === "sb_dathang") {
                            this.action = "thanhtoan.php"; // Thay đổi trang khi nhấp nút "Submit for Page 2"
                        }

                        // Tiếp tục thực hiện submit form theo action đã thay đổi
                    });
                </script>


                <!-- related products -->
                <div class="product-related-box single-layout">
                    <div class="biolife-title-box lg-margin-bottom-26px-im">
                        <span class="biolife-icon icon-organic"></span>
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Các món tương tự</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
                        <?php
                            $sql1 = "SELECT * FROM sanpham s join sizecuasanpham sz on s.MASP = sz.MASP WHERE sz.MASIZE in ('Vừa','M','Combo') and MALOAI = ".$row['MALOAI'];
                            $rs = $conn->query($sql1);
                                if ($rs->num_rows > 0) {
                                $rs = $conn->query($sql1);
                                $rsa = $rs -> fetch_all(MYSQLI_ASSOC);
                                foreach ($rsa as $row1) {
                                    $string = $row1['MASP'];
                                    // Loại bỏ các kí tự số khỏi chuỗi
                                    $masp = preg_replace('/[0-9]/', '', $string);
                        ?>                      
                            <li class="product-item">
                                <div class="contain-product layout-default">
                                    <div class="product-thumb">
                                        <a href="product-detail.php?id=<?php echo $string ?>" class="link-to-product">
                                            <img src="assets/images/products/<?php echo $masp ?>/<?php echo $row1['LINKANH'] ?>" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4 class="product-title"><a href="#" class="pr-name"><?php echo $row1['TENSP'] ?></a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol"></span><?php echo number_format($row1['DONGIASP']) ?> đ</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol"></span><?php echo number_format($row1['DONGIASP']+10000) ?> đ</span></del>
                                        </div>
                                        <div class="slide-down-box">
                                            <div class="buttons">
                                                <a href="#" style="padding: 10px 5px !important; margin-right: 5px !important;" class="btn add-to-cart-btn">đặt hàng ngay</a>
                                                <a href="#" style="padding: 0 !important; width: 10px !important;" class="btn"></a>
                                                <a href="#" style="padding: 10px 5px !important; " class="btn add-to-cart-btn">thêm vào giỏ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php }} ?>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>

    <?php
        include "footer.php";
    ?>

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