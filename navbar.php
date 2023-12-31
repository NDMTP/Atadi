<div class="header-middle biolife-sticky-object ">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-md-6 col-xs-6">
                <a href="index.php" class="biolife-logo"><img src="assets/images/organic-4.png" alt="biolife logo"
                        width="135" height="36"></a>
            </div>
            <div class="col-lg-5 col-md-5 hidden-sm hidden-xs m-2">
                <div class="primary-menu">
                    <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu"
                        data-menuname="main menu">
                        <li class="menu-item"><a href="index.php">Trang chủ</a></li>
                        <li class="menu-item menu-item-has-children has-megamenu">
                            <a href="category-grid.php" class="menu-name" data-title="Shop">Thực đơn</a>
                            <div class="wrap-megamenu lg-width-900 md-width-750">
                                <div class="mega-content">
                                    <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                        <div class="wrap-custom-menu vertical-menu">
                                            <h4 class="menu-title">Mì cay</h4>
                                            <ul class="menu">
                                                <?php
                                                    $sql = "SELECT * FROM sanpham where maloai='01'";
                                                    $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                        $result = $conn->query($sql);
                                                        $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                                        foreach ($result_all as $row) {
                                                ?>
                                                <li><a
                                                        href="product-detail.php?id=<?php echo $row['MASP'] ?>"><?php echo $row['TENSP'] ?></a>
                                                </li>
                                                <?php }} ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                        <div class="wrap-custom-menu vertical-menu">
                                            <h4 class="menu-title">Miến trộn</h4>
                                            <ul class="menu">
                                                <?php
                                                    $sql = "SELECT * FROM sanpham where maloai='03'";
                                                    $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                        $result = $conn->query($sql);
                                                        $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                                        foreach ($result_all as $row) {
                                                ?>
                                                <li><a
                                                        href="product-detail.php?id=<?php echo $row['MASP'] ?>"><?php echo $row['TENSP'] ?></a>
                                                </li>
                                                <?php }} ?>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                        <div class="wrap-custom-menu vertical-menu ">
                                            <h4 class="menu-title">Món Hàn</h4>
                                            <ul class="menu">
                                                <?php
                                                    $sql = "SELECT * FROM sanpham where maloai='03'";
                                                    $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                        $result = $conn->query($sql);
                                                        $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                                        foreach ($result_all as $row) {
                                                ?>
                                                <li><a
                                                        href="product-detail.php?id=<?php echo $row['MASP'] ?>"><?php echo $row['TENSP'] ?></a>
                                                </li>
                                                <?php }} ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                        <div class="wrap-custom-menu vertical-menu">
                                            <h4 class="menu-title">Lẩu</h4>
                                            <ul class="menu">
                                                <?php
                                                    $sql = "SELECT * FROM sanpham where maloai='02'";
                                                    $result = $conn->query($sql);
                                                        if ($result->num_rows > 0) {
                                                        $result = $conn->query($sql);
                                                        $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                                        foreach ($result_all as $row) {
                                                ?>
                                                <li><a
                                                        href="product-detail.php?id=<?php echo $row['MASP'] ?>"><?php echo $row['TENSP'] ?></a>
                                                </li>
                                                <?php }} ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="menu-item"><a href="hoadon.php">Hóa đơn</a></li>
                        <li class="menu-item"><a href="contact.php">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 hidden-sm hiddn-xs" style="margin-right: -20px;">
                <div class="header-search-bar layout-01 no-product-cat">
                    <form action="category-grid.php" class="form-search" name="desktop-seacrh" method="get">
                        <input type="text" name="search" class="input-text" value="<?php if(isset($_GET['search'])) echo $_GET['search'] ?>" placeholder="Bạn đang tìm gì...">
                        <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-1 col-md1 col-xs-3">
                <div class="biolife-cart-info">
                    <div class="mobile-search">
                        <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                        <div class="mobile-search-content">
                            <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                                <input type="text" name="s" class="input-text" value="" placeholder="Tìm ở đây...">
                                <select name="category">
                                    <option value="-1" selected>All Categories</option>
                                    <option value="vegetables">Vegetables</option>
                                    <option value="fresh_berries">Fresh Berries</option>
                                    <option value="ocean_foods">Ocean Foods</option>
                                    <option value="butter_eggs">Butter & Eggs</option>
                                    <option value="fastfood">Fastfood</option>
                                    <option value="fresh_meat">Fresh Meat</option>
                                    <option value="fresh_onion">Fresh Onion</option>
                                    <option value="papaya_crisps">Papaya & Crisps</option>
                                    <option value="oatmeal">Oatmeal</option>
                                </select>
                                <button type="submit" class="btn-submit">go</button>
                            </form>
                        </div>
                    </div>
                   
                    <?php
                        if (isset($_SESSION['email'])){
                    ?>
                    <div class="minicart-block row">
                        <div class="minicart-contain">
                            <a href="javascript:void(0)" class="link-to">
                                <span class="icon-qty-combine">
                                    <i class="icon-cart-mini biolife-icon"></i>
                                    <span class="qty"><?php echo $_SESSION['slsp'] ?></span>
                                </span>
                            </a>
                            <div class="cart-content">
                                <div class="cart-inner">
                                    <?php
                                        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                            foreach ($_SESSION['cart'] as $item) {
                                                $sql = "select * from sanpham s join sizecuasanpham sz on sz.MASP=s.MASP where sz.MASP = '{$item['id']}' and sz.MASIZE = '{$item['size']}'";
                                                $result = $conn->query($sql);
                                                $row = $result->fetch_assoc();
                                                $string = $row['MASP'];
                                                $masp = preg_replace('/[0-9]/', '', $string);
                                        ?>
                                    <ul class="products">
                                        <li>
                                            <div class="minicart-item">
                                                <div class="thumb">
                                                    <a href="#"><img
                                                            src="assets/images/products/<?php echo $masp."/".$row['LINKANH']?>"
                                                            width="90" height="90" alt="img"></a>
                                                </div>
                                                <div class="left-info">
                                                    <div class="product-title"><a href="#"
                                                            class="product-name"><?php echo $row['TENSP']." - Size: ".$item['size'] ?></a>
                                                    </div>
                                                    <div class="price">
                                                        <ins><span class="price-amount"><span
                                                                    class="currencySymbol"></span><?php echo number_format($row['DONGIASP']) ?></span></ins>
                                                        <del><span class="price-amount"><span
                                                                    class="currencySymbol"></span><?php echo number_format($row['DONGIASP']+10000) ?></span></del>
                                                    </div>
                                                    <div class="qty">
                                                        <label for="cart[id123][qty]">Qty:</label>
                                                        <input type="number" class="input-qty" name="cart[id123][qty]"
                                                            id="cart[id123][qty]" value="<?php echo $item['quant'] ?>"
                                                            disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <?php 
                                            }
                                        ?>
                                    <p class="btn-control">
                                        <a href="#" class="btn view-cart">Thanh toán</a>
                                        <a href="cart-page.php" class="btn">Chỉnh sửa giỏ</a>
                                    </p>
                                    <?php
                                            } else {
                                                echo '<p style="margin-top: 15px; font-size: 18px !important">Không có sản phẩm nào trong giỏ hàng</p>';
                                            }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>

                    <div class="mobile-menu-toggle">
                        <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-3">
                <div>
                    <?php

                    $is_logged_in = isset($_SESSION["email"]);

                    if ($is_logged_in) {
                        ?>
                    <div class="hidden-sm hidden-xs m-2">
                        <div class="primary-menu">
                            <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu"
                                data-menuname="main menu">
                                <li class="menu-item menu-item-has-children has-megamenu">
                                    <a href="#" class="menu-name" data-title="Shop"><span>Chào mừng,
                                            <?php echo  $_SESSION["lname"] ?></span></a>
                                    <div class="wrap-megamenu" style="right: 0 !important;">
                                        <div class="mega-content">
                                            <div class="">
                                                <div class="wrap-custom-menu vertical-menu-2">
                                                    <h4 class="menu-title">Tài khoản</h4>
                                                    <ul class="menu">
                                                        <li class="menu-item"><a href="user.php">Thông tin cá nhân</a>
                                                        </li>
                                                        <li class="menu-item"><a href="doimk.php">Đổi mật khẩu</a></li>
                                                        <li class="menu-item"><a href="dangxuat.php">Đăng xuất</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <?php
                    }
                    else {
                        ?>
                    <div class="hidden-sm hidden-xs m-2">
                        <div class="primary-menu">
                            <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu"
                                data-menuname="main menu">
                                <li class="menu-item">
                                    <a href="login.php" class="menu-name"><span>Đăng nhập/Đăng ký </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>