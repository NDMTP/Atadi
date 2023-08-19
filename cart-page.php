<!DOCTYPE html>
<html class="no-js" lang="en">

<?php
    require 'head.php';
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
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <h3 style="margin-top: 20px;" class="box-title">Giỏ hàng của bạn</h3>
                            <form class="shopping-cart-form" action="#" method="post">
                                <?php
                                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                ?>
                                <table class="shop_table cart-form">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach ($_SESSION['cart'] as $item) {
                                            $sql = "select * from sanpham s join sizecuasanpham sz on sz.MASP=s.MASP where sz.MASP = '{$item['id']}' and sz.MASIZE = '{$item['size']}'";
                                            $result = $conn->query($sql);
                                            $row = $result->fetch_assoc();
                                            $string = $row['MASP'];
                                            $masp = preg_replace('/[0-9]/', '', $string);
                                    ?>
                                    <tr class="cart_item">
                                        <td class="product-thumbnail" data-title="Product Name">
                                            <a class="prd-thumb" href="#">
                                                <figure><img width="113" height="113" src="assets/images/products/<?php echo $masp."/".$row['LINKANH']?>" alt="shipping cart"></figure>
                                            </a>
                                            <a class="prd-name" href="#"><?php echo $row['TENSP']." - Size: ".$item['size']?></a>
                                            <!-- <div class="action">
                                                <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div> -->
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span class="currencySymbol"></span><?php echo number_format($row['DONGIASP']) ?> đ</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol"></span><?php echo number_format($row['DONGIASP']+10000) ?> đ</span></del>
                                            </div>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity-box type1">
                                                <div class="qty-input">
                                                    <input type="text" name="qty12554" value="<?php echo $item['quant'] ?>" data-max_value="20" data-min_value="1" data-step="1">
                                                    <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                                    <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span class="currencySymbol"></span><?php echo number_format($item['quant']*$row['DONGIASP'])?> đ</span></ins>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    <tr class="cart_item wrap-buttons">
                                        <td class="wrap-btn-control" colspan="4">
                                            <a href="category-grid.php" class="btn back-to-shop">Mua thêm</a>
                                            <button class="btn btn-update" type="submit">Cập nhật</button>
                                            <a href="delete-cart.php" class="btn btn-clear" type="reset">xoá tất cả</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <?php
                                } else {
                                    echo '<div class="shpcart-subtotal-block">';
                                    echo '<h2>Không có sản phẩm nào trong giỏ hàng</h2>';
                                    echo '<div class="btn-checkout">';
                                    echo '   <a href="category-grid.php" class="btn checkout w-25">Xem tất cả sản phẩm</a>';
                                    echo '</div>';
                                    echo '</div>';
                                    
                                }
                                ?>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <div class="shpcart-subtotal-block">
                                <div class="subtotal-line">
                                    <b class="stt-name">Subtotal <span class="sub">(2ittems)</span></b>
                                    <span class="stt-price">£170.00</span>
                                </div>
                                <div class="subtotal-line">
                                    <b class="stt-name">Shipping</b>
                                    <span class="stt-price">£0.00</span>
                                </div>
                                <div class="tax-fee">
                                    <p class="title">Est. Taxes & Fees</p>
                                    <p class="desc">Based on 56789</p>
                                </div>
                                <div class="btn-checkout">
                                    <a href="#" class="btn checkout">Check out</a>
                                </div>
                                <div class="biolife-progress-bar">
                                    <table>
                                        <tr>
                                            <td class="first-position">
                                                <span class="index">$0</span>
                                            </td>
                                            <td class="mid-position">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="last-position">
                                                <span class="index">$99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <p class="pickup-info"><b>Free Pickup</b> is available as soon as today More about shipping and pickup</p>
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