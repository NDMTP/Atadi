<!DOCTYPE html>
<html class="no-js" lang="en">

<?php 
    require 'head.php' ;
    require 'connect.php';    
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
    <?php require 'header.php' ?>


    <!--Navigation section-->
    <!-- <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="#" class="permal-link">Natural Organic</a></li>
                <li class="nav-item"><span class="current-page">Fresh Fruit</span></li>
            </ul>
        </nav>
    </div> -->

    <div class="page-contain category-page no-sidebar">
        <div class="container">
            <div class="row">

                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="block-item recently-products-cat md-margin-bottom-39">
                        <!-- <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}' >
                            <li class="product-item">
                                <div class="contain-product layout-02">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/images/products/p-08.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-02">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/images/products/p-11.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-02">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/images/products/p-17.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-02">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/images/products/p-15.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-02">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/images/products/p-09.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-02">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/images/products/p-02.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-02">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/images/products/p-07.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-02">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/images/products/p-03.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="contain-product layout-02">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="assets/images/products/p-21.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul> -->
                    </div>

                    <div class="product-category grid-style">

                        <div id="top-functions-area" class="top-functions-area" >
                            <div class="flt-item to-left group-on-mobile">
                                <span class="flt-title">Lọc sản phẩm:</span>
                                <a href="#" class="icon-for-mobile">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <div class="wrap-selectors">
                                    <form action="#" name="frm-refine" method="get">
                                        <span class="title-for-mobile">Refine Products By</span>
                                        <div data-title="Price:" class="selector-item">
                                            <select name="price" class="selector">
                                                <option value="all">Giá</option>
                                                <option value="class-1st">Less than 5$</option>
                                                <option value="class-2nd">$5-10$</option>
                                                <option value="class-3rd">$10-20$</option>
                                                <option value="class-4th">$20-45$</option>
                                                <option value="class-5th">$45-100$</option>
                                                <option value="class-6th">$100-150$</option>
                                                <option value="class-7th">More than 150$</option>
                                            </select>
                                        </div>
                                        <div data-title="Brand:" class="selector-item">
                                            <select name="brad" class="selector">
                                                <option value="all">Loại</option>
                                                <option value="br2">Brand first</option>
                                                <option value="br3">Brand second</option>
                                                <option value="br4">Brand third</option>
                                                <option value="br5">Brand fourth</option>
                                                <option value="br6">Brand fiveth</option>
                                            </select>
                                        </div>
                                        <!-- <div data-title="Avalability:" class="selector-item">
                                            <select name="ability" class="selector">
                                                <option value="all">Availability</option>
                                                <option value="vl2">Availability 1</option>
                                                <option value="vl3">Availability 2</option>
                                                <option value="vl4">Availability 3</option>
                                                <option value="vl5">Availability 4</option>
                                                <option value="vl6">Availability 5</option>
                                            </select>
                                        </div> -->
                                        <p class="btn-for-mobile"><button type="submit" class="btn-submit">Lọc</button></p>
                                    </form>
                                </div>
                            </div>
                            <div class="flt-item to-right">
                                <span class="flt-title">Sắp xếp</span>
                                <div class="wrap-selectors">
                                    <div class="selector-item orderby-selector">
                                        <select name="orderby" class="orderby" aria-label="Shop order">
                                            <option value="menu_order" selected="selected">Mặc định</option>
                                            <option value="popularity">popularity</option>
                                            <option value="rating">average rating</option>
                                            <option value="date">newness</option>
                                            <option value="price">price: low to high</option>
                                            <option value="price-desc">price: high to low</option>
                                        </select>
                                    </div>
                                    <!-- <div class="selector-item viewmode-selector">
                                        <a href="category-grid-left-sidebar.html" class="viewmode grid-mode active"><i class="biolife-icon icon-grid"></i></a>
                                        <a href="category-list-left-sidebar.html" class="viewmode detail-mode"><i class="biolife-icon icon-list"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <ul class="products-list">

                            <?php
                                $sql = "SELECT * FROM sanpham";
                                $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                    $result = $conn->query($sql);
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
                                                <a href="product-detail.php?id=<?php echo $row['MASP'] ?>" class="link-to-product">
                                                    <img class="fit-image" src="assets/images/products/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>" alt="dd" width="270" height="270" class="product-thumnail">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4 class="product-title"><a href="#" class="pr-name"><?php echo $row['TENSP'] ?></a></h4>
                                            <div class="price">
                                                <ins><span class="price-amount"><span class="currencySymbol"></span><?php echo number_format($row['DONGIABANSP']) ?> đ</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol"></span><?php echo number_format($row['DONGIABANSP']+10000) ?> đ</span></del>
                                            </div>
                                            <div class="shipping-info">
                                                <p class="shipping-day">3-Day Shipping</p>
                                                <p class="for-today">Pree Pickup Today</p>
                                            </div>
                                            <div class="slide-down-box">
                                                <p class="message">All products are carefully selected to ensure food safety.</p>
                                                <div class="buttons">
                                                    <a href="#" style="padding: 10px 5px !important; margin-right: 5px !important;" class="btn add-to-cart-btn">đặt hàng ngay</a>
                                                    <a href="#" class="btn"></a>
                                                    <a href="#" style="padding: 10px 5px !important; " class="btn add-to-cart-btn">thêm vào giỏ</a>
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

                        <div class="biolife-panigations-block">
                            <ul class="panigation-contain">
                                <li><span class="current-page">1</span></li>
                                <li><a href="#" class="link-page">2</a></li>
                                <li><a href="#" class="link-page">3</a></li>
                                <li><span class="sep">....</span></li>
                                <li><a href="#" class="link-page">20</a></li>
                                <li><a href="#" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

   <?php require 'footer.php' ?>

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