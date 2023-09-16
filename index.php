<!DOCTYPE html>
<html class="no-js" lang="en">

<?php 
    require 'head.php' ;
    require 'connect.php';    
    require 'popup_themthanhcong.php';
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

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!--Block 01: Vertical Menu And Main Slide-->
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                        <div class="biolife-vertical-menu none-box-shadow  ">
                            <div class="vertical-menu vertical-category-block always ">
                                <div class="block-title">
                                    <span class="menu-icon">
                                        <span class="line-1"></span>
                                        <span class="line-2"></span>
                                        <span class="line-3"></span>
                                    </span>
                                    <span class="menu-title">Tất cả món ăn</span>
                                    <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up"
                                            aria-hidden="true"></i></span>
                                </div>
                                <div class="wrap-menu">
                                    <ul class="menu clone-main-menu">
                                        <li class="menu-item menu-item-has-children has-megamenu">
                                            <a href="#" class="menu-name" data-title="Fruit & Nut Gifts"><i
                                                    class="biolife-icon icon-fruits"></i>Mì cay</a>
                                            <div class="wrap-megamenu lg-width-550 md-width-640">
                                                <div class="mega-content">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-5 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="wrap-custom-menu vertical-menu">
                                                                <h4 class="menu-title">Mì cay</h4>
                                                                <ul class="menu">
                                                                <?php
                                                    $sql = "SELECT * FROM sanpham where maloai='01'LIMIT 10";
                                                    $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                        $result = $conn->query($sql);
                                                        $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                                        foreach ($result_all as $row) {
                                                ?>
                                                <li><a href="product-detail.php?id=<?php echo $row['MASP'] ?>"><?php echo $row['TENSP'] ?></a></li>
                                                <?php }} ?>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="col-lg-5 col-md-4 col-sm-12 lg-padding-left-50 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="biolife-products-block max-width-270">
                                                                <h4 class="menu-title">Món bán chạy</h4>
                                                                <ul class="products-list default-product-style biolife-carousel nav-none-after-1k2 nav-center"
                                                                    data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1, "responsive":[{"breakpoint":767, "settings":{ "arrows": false}}]}'>
                                                                    <li class="product-item">
                                                                        <div class="contain-product none-overlay">
                                                                            <div class="product-thumb">
                                                                                <a href="#" class="link-to-product">
                                                                                    <img src="assets/images/products/p-36.jpg"
                                                                                        alt="dd" width="270"
                                                                                        height="270"
                                                                                        class="product-thumnail">
                                                                                </a>
                                                                            </div>
                                                                            <div class="info">
                                                                                <b class="categories">Mì cay</b>
                                                                                <h4 class="product-title"><a href="product-detail.php?id=MC3"
                                                                                        class="pr-name">Mì Kimchi Bò
                                                                                        Mỹ</a></h4>
                                                                                        
                                                                                <div class="price">
                                                                                    <ins><span
                                                                                            class="price-amount"><span
                                                                                                class="currencySymbol">đ</span>59.000</span></ins>
                                                                                    <del><span
                                                                                            class="price-amount"><span
                                                                                                class="currencySymbol">đ</span>69.000</span></del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="product-item">
                                                                        <div class="contain-product none-overlay">
                                                                            <div class="product-thumb">
                                                                                <a href="#" class="link-to-product">
                                                                                    <img src="assets/images/products/MC/micay4.jpg"
                                                                                        alt="dd" width="270"
                                                                                        height="270"
                                                                                        class="product-thumnail">
                                                                                </a>
                                                                            </div>
                                                                            <div class="info">
                                                                                <b class="categories">Mì cay</b>
                                                                                <h4 class="product-title"><a href="product-detail.php?id=MC4"
                                                                                        class="pr-name">Mì Kimchi Bò
                                                                                        Úc</a></h4>
                                                                                <div class="price">
                                                                                    <ins><span
                                                                                            class="price-amount"><span
                                                                                                class="currencySymbol">đ</span>59.000</span></ins>
                                                                                    <del><span
                                                                                            class="price-amount"><span
                                                                                                class="currencySymbol">đ</span>69.000</span></del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="product-item">
                                                                        <div class="contain-product none-overlay">
                                                                            <div class="product-thumb">
                                                                                <a href="#" class="link-to-product">
                                                                                    <img src="assets/images/products/MC/micay5.jpg"
                                                                                        alt="dd" width="270"
                                                                                        height="270"
                                                                                        class="product-thumnail">
                                                                                </a>
                                                                            </div>
                                                                            <div class="info">
                                                                                <b class="categories">Mì cay</b>
                                                                                <h4 class="product-title"><a href="product-detail.php?id=MC5"
                                                                                        class="pr-name">Mì Kimchi Hải
                                                                                        Sản</a></h4>
                                                                                <div class="price">
                                                                                    <ins><span
                                                                                            class="price-amount"><span
                                                                                                class="currencySymbol">đ</span>45.000</span></ins>
                                                                                    <del><span
                                                                                            class="price-amount"><span
                                                                                                class="currencySymbol">đ</span>55.000</span></del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 md-margin-top-9">
                                                            <div class="biolife-brand">
                                                                <ul class="brands">
                                                                    <li><a href="#"><img
                                                                                src="assets/images/megamenu/brand-organic.png"
                                                                                width="161" height="136"
                                                                                alt="organic"></a></li>
                                                                    <li><a href="#"><img
                                                                                src="assets/images/megamenu/brand-explore.png"
                                                                                width="160" height="136"
                                                                                alt="explore"></a></li>
                                                                    <li><a href="#"><img
                                                                                src="assets/images/megamenu/brand-organic-2.png"
                                                                                width="99" height="136"
                                                                                alt="organic 2"></a></li>
                                                                    <li><a href="#"><img
                                                                                src="assets/images/megamenu/brand-eco-teas.png"
                                                                                width="164" height="136"
                                                                                alt="eco teas"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item menu-item-has-children has-megamenu">
                                            <a href="#" class="menu-name" data-title="Vegetables"><i
                                                    class="biolife-icon icon-broccoli-1"></i>Combo lẩu và nướng</a>
                                            <div class="wrap-megamenu lg-width-550 md-width-640 background-mega-01">
                                                <div class="mega-content">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-5 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-25">
                                                            <div class="wrap-custom-menu vertical-menu">
                                                                <h4 class="menu-title">Combo lẩu và nướng</h4>
                                                                <ul class="menu">
                                                                    <li><a href="#">Combo lẩu và nướng 1 người</a></li>
                                                                    <li><a href="#">Combo lẩu và nướng 2 người</a></li>
                                                                    <li><a href="#">Combo lẩu và nướng 4 người</a></li>
                                                                    <li><a href="#">Combo gia đình</a></li>
                                                                    <li><a href="#">Combo 2 lẩu và 1 nướng</a></li>
                                                                    <li><a href="#">Combo 2 nướng 1 lẩu</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-5 col-md-4 col-sm-12 lg-padding-left-50 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="biolife-products-block max-width-270">
                                                                <h4 class="menu-title">Món bán chạy</h4>
                                                                <ul class="products-list default-product-style biolife-carousel nav-none-after-1k2 nav-center"
                                                                    data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1, "responsive":[{"breakpoint":767, "settings":{ "arrows": false}}]}'>
                                                                    <li class="product-item">
                                                                        <div class="contain-product none-overlay">
                                                                            <div class="product-thumb">
                                                                                <a href="#" class="link-to-product">
                                                                                    <img src="assets/images/products/p-31.jpg"
                                                                                        alt="dd" width="270"
                                                                                        height="270"
                                                                                        class="product-thumnail">
                                                                                </a>
                                                                            </div>
                                                                            <div class="info">
                                                                                <b class="categories">Combo Lẩu và
                                                                                    nướng</b>
                                                                                <h4 class="product-title"><a href="#"
                                                                                        class="pr-name">Combo Lẩu và
                                                                                        Nướng 2 người</a></h4>
                                                                                <div class="price">
                                                                                    <ins><span
                                                                                            class="price-amount"><span
                                                                                                class="currencySymbol">đ</span>275.000</span></ins>
                                                                                    <del><span
                                                                                            class="price-amount"><span
                                                                                                class="currencySymbol">đ</span>295.000</span></del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item menu-item-has-children has-megamenu">
                                            <a href="#" class="menu-name" data-title="Fresh Berries"><i
                                                    class="biolife-icon icon-grape"></i>Lẩu</a>
                                            <div class="wrap-megamenu lg-width-550 md-width-640">
                                                <div class="mega-content">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-5 col-md-4 sm-col-12 md-margin-bottom-83 xs-margin-bottom-25">
                                                            <div class="wrap-custom-menu vertical-menu">
                                                                <h4 class="menu-title">Lẩu</h4>
                                                                <ul class="menu">
                                                                <?php
                                                    $sql = "SELECT * FROM sanpham where maloai='02'LIMIT 10";
                                                    $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                        $result = $conn->query($sql);
                                                        $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                                        foreach ($result_all as $row) {
                                                ?>
                                                <li><a href="product-detail.php?id=<?php echo $row['MASP'] ?>"><?php echo $row['TENSP'] ?></a></li>
                                                <?php }} ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-5 col-md-4 col-sm-12 lg-padding-left-50 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="biolife-products-block max-width-270">
                                                                <h4 class="menu-title">Món bán chạy</h4>
                                                                <ul class="products-list default-product-style biolife-carousel nav-none-after-1k2 nav-center"
                                                                    data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1, "responsive":[{"breakpoint":767, "settings":{ "arrows": false}}]}'>
                                                                    <li class="product-item">
                                                                        <div class="contain-product none-overlay">
                                                                            <div class="product-thumb">
                                                                                <a href="#" class="link-to-product">
                                                                                    <img src="assets/images/products/L/lau4.jpg"
                                                                                        alt="dd" width="270"
                                                                                        height="270"
                                                                                        class="product-thumnail">
                                                                                </a>
                                                                            </div>
                                                                            <div class="info">
                                                                                <b class="categories">Lẩu</b>
                                                                                <h4 class="product-title"><a href="product-detail.php?id=L4"
                                                                                        class="pr-name">Lẩu Hai Ngăn</a></h4>
                                                                                <div class="price">
                                                                                    <ins><span
                                                                                            class="price-amount"><span
                                                                                                class="currencySymbol">đ</span>149.000</span></ins>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item"><a href="category-grid.php?gia=&loai=03&search=#" class="menu-name" data-title="Ocean Foods"><i
                                                    class="biolife-icon icon-fish"></i>Miến trộn</a></li>
                                        <li class="menu-item menu-item-has-children has-child">
                                            <a href="#" class="menu-name" data-title="Butter & Eggs"><i
                                                    class="biolife-icon icon-honey"></i>Món Hàn</a>
                                            <ul class="sub-menu">
                                            <?php
                                                    $sql = "SELECT * FROM sanpham where maloai='04'LIMIT 10";
                                                    $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                        $result = $conn->query($sql);
                                                        $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                                        foreach ($result_all as $row) {
                                                ?>
                                                <li><a href="product-detail.php?id=<?php echo $row['MASP'] ?>"><?php echo $row['TENSP'] ?></a></li>
                                                <?php }} ?>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="category-grid.php?gia=&loai=05&search=#" class="menu-title"><i
                                                    class="biolife-icon icon-fast-food"></i>Cơm trộn</a></li>
                                        
                                        <li class="menu-item"><a href="category-grid.php?gia=&loai=07&search=#" class="menu-title"><i
                                                    class="biolife-icon icon-onions"></i>Nước giải khát</a></li>
                                        <li class="menu-item"><a href="category-grid.php?gia=&loai=08&search=#" class="menu-title"><i
                                                    class="biolife-icon icon-avocado"></i>Nướng</a></li>
                                        <li class="menu-item"><a href="category-grid.php?gia=&loai=09&search=#" class="menu-title"><i
                                                    class="biolife-icon icon-contain"></i>SuShi</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12">
                        <div class="main-slide block-slider nav-change hover-main-color type02">
                            <ul class="biolife-carousel"
                                data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}'>
                                <li>
                                    <div class="slide-contain slider-opt04__layout01 light-version first-slide">
                                        <div class="media"></div>
                                        <div class="text-content">
                                            <i class="first-line">ATADI</i>
                                            <h3 class="second-line">Mì cay ba chỉ bò Mỹ</h3>
                                            <p class="third-line">Sợi mì 100% từ Hàn, bò được nhập khẩu từ Mỹ, với uy
                                                tín chất lượng lên hàng đầu</p>
                                            <p class="buttons">
                                                <!-- <a href="#" class="btn btn-bold">Đặt hàng ngay</a> -->
                                                <a href="#" class="btn btn-thin">Xem chi tiết</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-contain slider-opt04__layout01 light-version second-slide">
                                        <div class="media"></div>
                                        <div class="text-content">
                                            <i class="first-line">Món Hàn</i>
                                            <h3 class="second-line">Gà sốt cay</h3>
                                            <p class="third-line">Thịt gà tươi ngon, 100% nguyên liệu tươi sạch</p>
                                            <p class="buttons">
                                                <a href="#" class="btn btn-bold">Shop now</a>
                                                <a href="#" class="btn btn-thin">View lookbook</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-contain slider-opt04__layout01 light-version third-slide">
                                        <div class="media"></div>
                                        <div class="text-content">
                                            <i class="first-line">Pomegranate</i>
                                            <h3 class="second-line">Vegetables 100% Organic</h3>
                                            <p class="third-line">A blend of freshly squeezed green apple & fruits</p>
                                            <p class="buttons">
                                                <a href="#" class="btn btn-bold">Shop now</a>
                                                <a href="#" class="btn btn-thin">View lookbook</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!--Block 02: Banners-->
            <div class="banner-block sm-margin-bottom-57px xs-margin-top-80px sm-margin-top-30px">
                <div class="container">
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile"
                        data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                        <li>
                            <div class="biolife-banner biolife-banner__style-08">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="http://localhost/atadi/category-grid.php?loai=01" class="bn-link"><img
                                                src="assets/images/products/p-33.jpg" width="400" height="300"
                                                alt=""></a>
                                    </div>
                                    <div class="text-content">
                                        <span class="text1">Mì cay</span>
                                        <b class="text2">100% Nguyên liệu tươi sạch</b>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-banner biolife-banner__style-09">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="http://localhost/atadi/category-grid.php?gia=&loai=04#"
                                            class="bn-link"><img src="assets/images/products/p-34.jpg" width="400"
                                                height="300" alt=""></a>
                                    </div>
                                    <div class="text-content">
                                        <span class="text1">Món Hàn</span>
                                        <b class="text2">Gà sốt cay</b>
                                        <span class="text3">Nguyên liệu đậm đà</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-banner biolife-banner__style-10">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="http://localhost/atadi/category-grid.php?gia=&loai=04#"
                                            class="bn-link"><img src="assets/images/products/p-35.jpg" width="500"
                                                height="300" alt=""></a>
                                    </div>
                                    <div class="text-content">
                                        <span class="text1">Món Hàn</span>
                                        <b class="text2">Bánh gạo cay</b>
                                        <span class="text3">Nguyên liệu tươi ngon từng vị</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Block 03: Categories-->
            <div class="wrap-category xs-margin-top-80px">
                <div class="container">
                    <div class="biolife-title-box style-02 xs-margin-bottom-33px">
                        <span class="subtitle">DANH MỤC HOT 2023</span>
                        <h3 class="main-title">Danh mục sản phẩm của chúng tôi</h3>
                        <p class="desc">Thức ăn tự nhiên được lấy từ những chuỗi cửa hiện đại bậc nhất thế giới với chu
                            trình an toàn nghiêm ngặt</p>
                    </div>
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile"
                        data-slick='{"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="category-grid.php?loai=01" class="cat-link">
                                        <img src="assets/images/products/MC/micay1.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Mì cay</h4>
                                    <span class="cat-number">(10 món)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="category-grid.php?loai=03" class="cat-link">
                                        <img src="assets/images/products/MT/mientron4.jpg" width="277" height="185"
                                            alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Miến trộn</h4>
                                    <span class="cat-number">(06 món)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="category-grid.php?loai=04" class="cat-link">
                                        <img src="assets/images/products/MH/banhbachtuot.jpg" width="277" height="185"
                                            alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Món hàn</h4>
                                    <span class="cat-number">(04 món)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="category-grid.php?loai=02" class="cat-link">
                                        <img src="assets/images/products/L/lau3.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Lẩu</h4>
                                    <span class="cat-number">(06 món)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="category-grid.php?loai=05" class="cat-link">
                                        <img src="assets/images/products/CT/comtron4.jpg" width="277" height="185"
                                            alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Cơm trộn</h4>
                                    <span class="cat-number">(04 món)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="category-grid.php?loai=07" class="cat-link">
                                        <img src="assets/images/products/N/nuoc6.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Nước giải khát</h4>
                                    <span class="cat-number">(08 món)</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="biolife-service type01 biolife-service__type01 xs-margin-top-60px sm-margin-top-45px">
                        <ul class="services-list">
                            <li>
                                <div class="service-inner color-reverse">
                                    <span class="number">1</span>
                                    <span class="biolife-icon icon-beer"></span>
                                    <a class="srv-name" href="#">Sản phẩm đầy đủ</a>
                                </div>
                            </li>
                            <li>
                                <div class="service-inner color-reverse">
                                    <span class="number">2</span>
                                    <span class="biolife-icon icon-schedule"></span>
                                    <a class="srv-name" href="#">Giao hàng đúng giờ</a>
                                </div>
                            </li>
                            <li>
                                <div class="service-inner color-reverse">
                                    <span class="number">3</span>
                                    <span class="biolife-icon icon-car"></span>
                                    <a class="srv-name" href="#">Miễn phí vận chuyển</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Block 04: Product Tab-->
            <div class="product-tab z-index-20 sm-margin-top-59px xs-margin-top-20px">
                <div class="container">
                    <div class="biolife-title-box slim-item">
                        <span class="subtitle">Tất cả các mặt hàng tốt nhất cho bạn</span>
                        <h3 class="main-title">Sản phẩm của chúng tôi</h3>
                    </div>
                    <div class="biolife-tab biolife-tab-contain sm-margin-top-23px">
                        <div class="tab-head tab-head__sample-layout">
                            <ul class="tabs">
                                <li class="tab-element active">
                                    <a href="#tab01_1st" class="tab-link">Đặc sắc</a>
                                </li>
                                <li class="tab-element">
                                    <a href="#tab01_2nd" class="tab-link">Bán chạy nhất</a>
                                </li>
                                <li class="tab-element">
                                    <a href="#tab01_3rd" class="tab-link">Đang khuyến mãi</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <!-- line 1================================================== -->
                            <div id="tab01_1st" class="tab-contain active">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                    data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15 }}]}'>
                                    <?php

                                        $query = "SELECT * FROM sanpham s join sizecuasanpham sz on s.MASP = sz.MASP WHERE sz.MASIZE in ('Vừa','M','Combo') limit 4";

                                        $result = $conn->query($query);
                                            if ($result->num_rows > 0) {
                                            $result = $conn->query($query);
                                            $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                            foreach ($result_all as $row) {
                                                $string = $row['MASP'];
                                                // Loại bỏ các kí tự số khỏi chuỗi
                                                $masp = preg_replace('/[0-9]/', '', $string);
                                    ?>
                                    <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="contain-product layout-default">
                                            <div class="image-container">
                                                <div class="product-thumb">
                                                    <a href="product-detail.php?id=<?php echo $row['MASP'] ?>"
                                                        class="link-to-product">
                                                        <img class="fit-image"
                                                            src="assets/images/products/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>"
                                                            alt="dd" width="270" height="270" class="product-thumnail">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4 class="product-title"><a href="#"
                                                        class="pr-name"><?php echo $row['TENSP'] ?></a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol"></span><?php echo number_format($row['DONGIASP']) ?>
                                                            đ</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol"></span><?php echo number_format($row['DONGIASP']+10000) ?>
                                                            đ</span></del>
                                                </div>
                                                <div class="shipping-info" style="margin-top: 15px;">
                                                    <p class="shipping-day">Sản phẩm đặc sắc</p>
                                                </div>
                                                <div class="slide-down-box">
                                                    <div class="buttons">
                                                        <!-- <a href="#"
                                                            style="padding: 10px 5px !important; margin-right: 5px !important;"
                                                            class="btn add-to-cart-btn">đặt hàng ngay</a> -->
                                                        <a href="#"
                                                            style="padding: 0 !important; width: 10px !important;"
                                                            class="btn"></a>
                                                        <a name="sb"
                                                            href="themvaogiohang.php?from=index&pdid=<?php echo $row['MASP'] ?>&size=<?php echo $row['MASIZE'] ?>&qty12554=1"
                                                            style="padding: 10px 5px !important; "
                                                            class="btn add-to-cart-btn">thêm vào giỏ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php  }} ?>
                                </ul>
                            </div>
                            <!-- line 2======================================-->
                            <div id="tab01_2nd" class="tab-contain">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                    data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15 }}]}'>
                                    <?php

                                        $query = "SELECT * FROM sanpham s join sizecuasanpham sz on s.MASP = sz.MASP WHERE sz.MASIZE in ('Vừa','M','Combo') and s.maloai='01' limit 4";

                                        $result = $conn->query($query);
                                            if ($result->num_rows > 0) {
                                            $result = $conn->query($query);
                                            $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                            foreach ($result_all as $row) {
                                                $string = $row['MASP'];
                                                // Loại bỏ các kí tự số khỏi chuỗi
                                                $masp = preg_replace('/[0-9]/', '', $string);
                                    ?>
                                    <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="contain-product layout-default">
                                            <div class="image-container">
                                                <div class="product-thumb">
                                                    <a href="product-detail.php?id=<?php echo $row['MASP'] ?>"
                                                        class="link-to-product">
                                                        <img class="fit-image"
                                                            src="assets/images/products/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>"
                                                            alt="dd" width="270" height="270" class="product-thumnail">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4 class="product-title"><a href="#"
                                                        class="pr-name"><?php echo $row['TENSP'] ?></a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol"></span><?php echo number_format($row['DONGIASP']) ?>
                                                            đ</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol"></span><?php echo number_format($row['DONGIASP']+10000) ?>
                                                            đ</span></del>
                                                </div>
                                                <div class="shipping-info">
                                                    <p class="for-today">Sản phẩm bán chạy</p>
                                                </div>
                                                <div class="slide-down-box">

                                                    <div class="buttons">
                                                        <!-- <a href="#"
                                                            style="padding: 10px 5px !important; margin-right: 5px !important;"
                                                            class="btn add-to-cart-btn">đặt hàng ngay</a> -->
                                                        <a href="#"
                                                            style="padding: 0 !important; width: 10px !important;"
                                                            class="btn"></a>
                                                        <a href="themvaogiohang.php?from=index&pdid=<?php echo $row['MASP'] ?>&size=<?php echo $row['MASIZE'] ?>&qty12554=1"
                                                            style="padding: 10px 5px !important; "
                                                            class="btn add-to-cart-btn">thêm vào giỏ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php  }} ?>
                                </ul>
                            </div>
                            <!-- line 3=========================== -->
                            <div id="tab01_3rd" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                    data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15 }}]}'>
                                    <?php

                                        $query = "SELECT * FROM sanpham s join sizecuasanpham sz on s.MASP = sz.MASP WHERE sz.MASIZE in ('Vừa','M','Combo') limit 4";

                                        $result = $conn->query($query);
                                            if ($result->num_rows > 0) {
                                            $result = $conn->query($query);
                                            $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                            foreach ($result_all as $row) {
                                                $string = $row['MASP'];
                                                // Loại bỏ các kí tự số khỏi chuỗi
                                                $masp = preg_replace('/[0-9]/', '', $string);
                                    ?>
                                    <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="contain-product layout-default">
                                            <div class="image-container">
                                                <div class="product-thumb">
                                                    <a href="product-detail.php?id=<?php echo $row['MASP'] ?>"
                                                        class="link-to-product">
                                                        <img class="fit-image"
                                                            src="assets/images/products/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>"
                                                            alt="dd" width="270" height="270" class="product-thumnail">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4 class="product-title"><a href="#"
                                                        class="pr-name"><?php echo $row['TENSP'] ?></a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol"></span><?php echo number_format($row['DONGIASP']) ?>
                                                            đ</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol"></span><?php echo number_format($row['DONGIASP']+10000) ?>
                                                            đ</span></del>
                                                </div>
                                                <div class="shipping-info">
                                                    <p class="shipping-day">Sản phẩm khuyến mãi</p>
                                                </div>
                                                <div class="slide-down-box">

                                                    <div class="buttons">
                                                        <!-- <a href="#"
                                                            style="padding: 10px 5px !important; margin-right: 5px !important;"
                                                            class="btn add-to-cart-btn">đặt hàng ngay</a> -->
                                                        <a href="#"
                                                            style="padding: 0 !important; width: 10px !important;"
                                                            class="btn"></a>
                                                        <a href="themvaogiohang.php?from=index&pdid=<?php echo $row['MASP'] ?>&size=<?php echo $row['MASIZE'] ?>&qty12554=1"
                                                            style="padding: 10px 5px !important; "
                                                            class="btn add-to-cart-btn">thêm vào giỏ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php  }} ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--Block 06: Advance Box-->
            <div class="container z-index-20 xs-margin-top-80px sm-margin-top-300">
                <div class="row">
                    <div class="col-lg-4 sm-margin-top-60px ">
                        <div class="row">
                            <div
                                class="col-lg-12 col-md-4 col-sm-6 col-xs-12 xs-margin-top-30px sm-margin-top-0 lg-margin-top-30px">
                                <div class="biolife-banner style-06 biolife-banner__style-06">
                                    <div class="banner-contain">
                                        <div class="media">
                                            <a href="product-detail.php?id=MC6" class="bn-link"><img
                                                    src="assets/images/products/p-33.jpg" width="400" height="400"
                                                    alt=""></a>
                                        </div>
                                        <div class="text-content"
                                            style="background-color: rgba(255,255,255,0.6); padding: 20px; margin-top: 20px;">
                                            <b class="text1">Mì kimchi bạch tuột</b>

                                            <b class="text-pr"><span>Giá chỉ:</span>đ45.000</b>
                                            <a href="product-detail.php?id=MC6" class="btn btn-shopnow">Đặt món ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-12 col-md-4 col-sm-6 col-xs-12 xs-margin-top-30px sm-margin-top-0 lg-margin-top-30px">
                                <div class="biolife-banner style-06 biolife-banner__style-06">
                                    <div class="banner-contain">
                                        <div class="media">
                                            <a href="product-detail.php?id=L4" class="bn-link"><img
                                                    src="assets/images/products/p-31.jpg" width="400" height="400"
                                                    alt=""></a>
                                        </div>
                                        <div class="text-content"
                                            style="background-color: rgba(255,255,255,0.6); padding: 20px; margin-top: 20px;">
                                            <b class="text1">Lẩu 2 ngăn</b>

                                            <b class="text-pr"><span>Giá chỉ:</span>đ79.000</b>
                                            <a href="product-detail.php?id=L4" class="btn btn-shopnow">Đặt món ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-12 col-md-4 col-sm-6 col-xs-12 xs-margin-top-60px sm-margin-top-30 lg-margin-top-60px">
                                <div class="biolife-banner style-06 biolife-banner__style-06">
                                    <div class="banner-contain">
                                        <div class="media">
                                            <a href="product-detail.php?id=MC6" class="bn-link"><img
                                                    src="assets/images/products/p-40.jpg" width="400" height="400"
                                                    alt=""></a>
                                        </div>
                                        <div class="text-content"
                                            style="background-color: rgba(255,255,255,0.6); padding: 20px; margin-top: 20px;">
                                            <b class="text1">Gà cay phô mai</b>

                                            <b class="text-pr"><span>Giá chỉ:</span>đ40.000</b>
                                            <a href="product-detail.php?id=MC6" class="btn btn-shopnow">Đặt món ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 sm-margin-top-64px">
                        <div class="advance-product-box">
                            <div
                                class="biolife-title-box bold-style biolife-title-box__bold-style xs-margin-top-80px-im sm-margin-top-0-im lg-margin-bottom-26px-im">
                                <h3 class="title">Sản phẩm bán chạy nhất</h3>
                            </div>
                            <ul class="products-list biolife-carousel nav-top-right nav-main-color nav-none-on-mobile eq-height-contain"
                                data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":0,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin": 20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin": 15}}]}'>

                                <?php
                                $sql = "SELECT * FROM sanpham s join sizecuasanpham sz on s.MASP = sz.MASP WHERE sz.MASIZE in ('Vừa','M','Combo') and  maloai='02' limit 6" ;
                                $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                    $result = $conn->query($sql);
                                    $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                    foreach ($result_all as $row) {
                                        $string = $row['MASP'];
                                        // Loại bỏ các kí tự số khỏi chuỗi
                                        $masp = preg_replace('/[0-9]/', '', $string);
                            ?>
                                <li class="product-item" style="margin-top: 15px !important;">
                                    <div class="contain-product layout-default">
                                        <div class="image-container">
                                            <div class="product-thumb">
                                                <a href="product-detail.php?id=<?php echo $row['MASP'] ?>"
                                                    class="link-to-product">
                                                    <img class="fit-image"
                                                        src="assets/images/products/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>"
                                                        alt="dd" width="270" height="270" class="product-thumnail">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4 class="product-title"><a href="#"
                                                    class="pr-name"><?php echo $row['TENSP'] ?></a></h4>
                                            <div class="price">
                                                <ins><span class="price-amount"><span
                                                            class="currencySymbol"></span><?php echo number_format($row['DONGIASP']) ?>
                                                        đ</span></ins>

                                            </div>
                                            <div class="shipping-info">
                                                <p class="shipping-day" style="margin-top: -15px !important;">Sản phẩm
                                                    bán chạy</p>

                                            </div>
                                            <div class="slide-down-box">

                                                <div class="buttons">
                                                    <!-- <a href="#"
                                                        style="padding: 10px 5px !important; margin-right: 5px !important;"
                                                        class="btn add-to-cart-btn">đặt hàng ngay</a> -->
                                                    <a href="#" style="padding: 0 !important; width: 10px !important;"
                                                        class="btn"></a>
                                                    <a href="themvaogiohang.php?from=index&pdid=<?php echo $row['MASP'] ?>&size=<?php echo $row['MASIZE'] ?>&qty12554=1"
                                                        style="padding: 10px 5px !important; "
                                                        class="btn add-to-cart-btn">thêm vào giỏ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                    }
                                }
                                ?>




                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php
        include "footer.php";
    ?>

    <!--Quickview Popup-->
    <div id="biolife-quickview-block" class="biolife-quickview-block">
        <div class="quickview-container">
            <a href="#" class="btn-close-quickview" data-object="open-quickview-block"><span
                    class="biolife-icon icon-close-menu"></span></a>
            <div class="biolife-quickview-inner">
                <div class="media">
                    <ul class="biolife-carousel quickview-for"
                        data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".quickview-nav"}'>
                        <li><img src="assets/images/details-product/detail_01.jpg" alt="" width="500" height="500"></li>
                        <li><img src="assets/images/details-product/detail_02.jpg" alt="" width="500" height="500"></li>
                        <li><img src="assets/images/details-product/detail_03.jpg" alt="" width="500" height="500"></li>
                        <li><img src="assets/images/details-product/detail_04.jpg" alt="" width="500" height="500"></li>
                        <li><img src="assets/images/details-product/detail_05.jpg" alt="" width="500" height="500"></li>
                        <li><img src="assets/images/details-product/detail_06.jpg" alt="" width="500" height="500"></li>
                        <li><img src="assets/images/details-product/detail_07.jpg" alt="" width="500" height="500"></li>
                    </ul>
                    <ul class="biolife-carousel quickview-nav"
                        data-slick='{"arrows":true,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":3,"slidesToScroll":1,"asNavFor":".quickview-for"}'>
                        <li><img src="assets/images/details-product/thumb_01.jpg" alt="" width="88" height="88"></li>
                        <li><img src="assets/images/details-product/thumb_02.jpg" alt="" width="88" height="88"></li>
                        <li><img src="assets/images/details-product/thumb_03.jpg" alt="" width="88" height="88"></li>
                        <li><img src="assets/images/details-product/thumb_04.jpg" alt="" width="88" height="88"></li>
                        <li><img src="assets/images/details-product/thumb_05.jpg" alt="" width="88" height="88"></li>
                        <li><img src="assets/images/details-product/thumb_06.jpg" alt="" width="88" height="88"></li>
                        <li><img src="assets/images/details-product/thumb_07.jpg" alt="" width="88" height="88"></li>
                    </ul>
                </div>
                <div class="product-attribute">
                    <h4 class="title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                    <div class="rating">
                        <p class="star-rating"><span class="width-80percent"></span></p>
                    </div>

                    <div class="price price-contain">
                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                    </div>
                    <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel maximus
                        lacus. Duis ut mauris eget justo dictum tempus sed vel tellus.</p>
                    <div class="from-cart">
                        <div class="qty-input">
                            <input type="text" name="qty12554" value="1" data-max_value="20" data-min_value="1"
                                data-step="1">
                            <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                            <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </div>
                        <div class="buttons">
                            <a href="#" class="btn add-to-cart-btn btn-bold">add to cart</a>
                        </div>
                    </div>

                    <div class="product-meta">
                        <div class="product-atts">
                            <div class="product-atts-item">
                                <b class="meta-title">Categories:</b>
                                <ul class="meta-list">
                                    <li><a href="#" class="meta-link">Milk & Cream</a></li>
                                    <li><a href="#" class="meta-link">Fresh Meat</a></li>
                                    <li><a href="#" class="meta-link">Fresh Fruit</a></li>
                                </ul>
                            </div>
                            <div class="product-atts-item">
                                <b class="meta-title">Tags:</b>
                                <ul class="meta-list">
                                    <li><a href="#" class="meta-link">food theme</a></li>
                                    <li><a href="#" class="meta-link">organic food</a></li>
                                    <li><a href="#" class="meta-link">organic theme</a></li>
                                </ul>
                            </div>
                            <div class="product-atts-item">
                                <b class="meta-title">Brand:</b>
                                <ul class="meta-list">
                                    <li><a href="#" class="meta-link">Fresh Fruit</a></li>
                                </ul>
                            </div>
                        </div>
                        <span class="sku">SKU: N/A</span>
                        <div class="biolife-social inline add-title">
                            <span class="fr-title">Share:</span>
                            <ul class="socials">
                                <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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