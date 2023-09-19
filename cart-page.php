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
                                $tongtien = 0;
                                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                ?>
                                <table class="shop_table cart-form">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="product-name">Sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Tổng</th>
                                            <th class="product-action"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($_SESSION['cart'] as $key => $item) {
                                            $sql = "select * from sanpham s join sizecuasanpham sz on sz.MASP=s.MASP where sz.MASP = '{$item['id']}' and sz.MASIZE = '{$item['size']}'";
                                            $result = $conn->query($sql);
                                            $row = $result->fetch_assoc();
                                            $string = $row['MASP'];
                                            $masp = preg_replace('/[0-9]/', '', $string);
                                    ?>
                                        <tr class="pd cart_item">
                                            <td class="product-quantity" data-title="Quantity"
                                                style="padding: 0 1rem !important;">
                                                <div class="form-check">
                                                    <input class="check1" type="checkbox"
                                                        style="scale: 1.5 !important;">
                                                    <input class="size" type="hidden"
                                                        value="<?php echo $item['size']?>">
                                                    <input class="level" type="hidden"
                                                        value="<?php echo $item['level']?>">
                                                    <input class="masp" type="hidden" value="<?php echo $string?>">
                                                    <input class="sl" type="hidden" value="<?php echo $item['quant']?>">
                                                    <input class="key" type="hidden" value="<?php echo $key ?>">
                                                    <input class="dg" type="hidden"
                                                        value="<?php echo $row['DONGIASP'] ?>">
                                                </div>
                                            </td>
                                            <td class="product-thumbnail" data-title="Product Name">
                                                <a class="prd-thumb" href="#">
                                                    <figure><img width="113" height="113"
                                                            src="assets/images/products/<?php echo $masp."/".$row['LINKANH']?>"
                                                            alt="shipping cart"></figure>
                                                </a>
                                                <a class="prd-name"
                                                    href="#"><?php echo $row['TENSP']." - Size: ".$item['size']?></a>
                                                <!-- <div class="action">
                                                <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div> -->
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <div class="price price-contain">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol"></span><?php echo number_format($row['DONGIASP']) ?>
                                                            đ</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol"></span><?php echo number_format($row['DONGIASP']+10000) ?>
                                                            đ</span></del>
                                                </div>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity-box type1">
                                                    <div class="pd1 qty-input">
                                                        <!-- so luong sp -->
                                                        <input type="number" name="qty12554" class="num"
                                                            value="<?php echo $item['quant'] ?>" max="20" min="1">

                                                        <input class="size" type="hidden"
                                                            value="<?php echo $item['size']?>">
                                                        <input class="dg" type="hidden"
                                                            value="<?php echo $row['DONGIASP']?>">
                                                        <input class="masp" type="hidden" value="<?php echo $string?>">
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <div class="price price-contain">
                                                    <ins><span
                                                            class="sum price-amount"><?php echo number_format($item['quant']*$row['DONGIASP']); $tongtien+=($item['quant']*$row['DONGIASP'])?>
                                                            đ</span></ins>
                                                </div>
                                            </td>
                                            <td class="product-action" data-title="Action">
                                                <div class="price price-contain">
                                                    <a href="delete-one-cart.php?key=<?php echo $key ?>">
                                                        <ins><span class="price-amount"><span
                                                                    class="currencySymbol"></span>
                                                                <i class="fas fa-trash-alt"></i>
                                                            </span></ins>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                    ?>
                                        <tr class="cart_item wrap-buttons">
                                            <td class="wrap-btn-control" colspan="5">
                                                <a href="category-grid.php" class="btn back-to-shop">Mua thêm</a>
                                                <a href="delete-cart.php" class="btn btn-clear" type="reset">xoá tất
                                                    cả</a>
                                            </td>
                                        </tr>
                                        <!-- tesst -->

                                        <!-- end -->
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
                                <div class="subtotal-line" style="margin-top: 20px;">
                                    <!-- chưa xử lý chỗ này -->
                                    <b class="stt-name">Tổng <span class="sub">(<?php echo $_SESSION['slsp'] ?>
                                            món)</span></b>
                                    <!-- tong tien -->
                                    <span id="tong" class="stt-price">0 đ</span>
                                </div>
                                <form action="thongtinmuahang.php" method="get">

                                    <?php
                                        $sql = "select * from khuyenmai where ";
                                    ?>
                                    <div class="subtotal-line"><b class="stt-name">Giảm giá <br>
                                            <span style="color: red !important;" class="sub">Áp dụng cho hoá đơn trên
                                                <span id="tong1">0 đ</span></span></b>
                                    </div>

                                    <div class="subtotal-line"><b class="stt-name">Quận <br>
                                            <span style="color: red !important;" class="sub">(*Chỉ giao trong các quận
                                                sau:)</span></b>
                                    </div>

                                    <div>
                                        <div style="width: 100% !important;" class="form_combobox w-100">
                                            <select required
                                                style="color: black !important; margin-left: 10px !important; "
                                                name="area" id="areaSelect">
                                                <option selected disabled value="">Chọn quận</option>
                                                <option value="NK">Ninh Kiều</option>
                                                <option value="BT">Bình Thuỷ</option>
                                                <option value="CR">Cái Răng</option>
                                            </select>
                                        </div>
                                    </div>


                                    <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        const areaSelect = document.getElementById("areaSelect");

                                        areaSelect.addEventListener("change", function() {
                                            const phuong = document.getElementById('phuong');
                                            phuong.innerHTML =
                                                '<div style="width: 100% !important;" class="form_combobox w-100" id="phuong"><select style="color: black !important; margin-left: 10px !important; " name="area" id="areaSelect"></select></div>';
                                        });
                                    });
                                    $(document).ready(function() {
                                        $(".check1").on("change", function() {
                                            //event.preventDefault();
                                            if (this.checked) {
                                                var pdid = $(this).siblings(".masp").val();
                                                var level = $(this).siblings(".level").val();
                                                var size = $(this).siblings(".size").val();
                                                var qty12554 = $(this).closest(".pd").find(".num")
                                                    .val();
                                                $.post('cart_temp.php', {
                                                    pdid: pdid,
                                                    size: size,
                                                    level: level,
                                                    qty12554: qty12554
                                                }, function(data) {
                                                    $("#tong").html(data + "đ");
                                                    $("#tong1").html(data + "đ");
                                                });
                                            } else {
                                                var key = $(this).siblings(".key").val();
                                                var dg = $(this).siblings(".dg").val();
                                                var qty12554 = $(this).closest(".pd").find(".num")
                                                    .val();
                                                var ma = $(this).siblings(".masp").val();
                                                var size = $(this).siblings(".size").val();
                                                $.post('cartsession_delete.php', {
                                                    check: 1,
                                                    size: size,
                                                    ma: ma,
                                                    dg: dg,
                                                    qty12554: qty12554
                                                }, function(data) {
                                                    $("#tong").html(data + "đ");
                                                    $("#tong1").html(data + "đ");

                                                });
                                            }
                                        });
                                        $(".num").on("change", function() {
                                            var masp = $(this).siblings(".masp").val();
                                            var size = $(this).siblings(".size").val();
                                            var dg = $(this).siblings(".dg").val();
                                            var num = $(this).val();
                                            var $sum = $(this).closest(".pd").find(".sum");
                                            $.post("cart_changenum.php", {
                                                check: 2,
                                                size: size,
                                                ma: masp,
                                                num: num
                                            }, function(data) {
                                                var tong = data * dg;
                                                var tong1 = new Intl.NumberFormat('vi-VN', {
                                                    style: 'currency',
                                                    currency: 'VND',
                                                });
                                                var oldsum = $sum.data("old");
                                                $sum.html(tong1.format(tong));
                                                $sum.data("old", tong1.format(tong));
                                            });
                                        });
                                    });
                                    </script>
                                    <div style="margin-top: 5px !important;" class="btn-checkout">
                                        <button style="width: 100%;" type="submit" class="btn checkout">Đặt
                                            hàng</button>
                                    </div>
                                </form>
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