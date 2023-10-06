<!DOCTYPE html>
<html class="no-js" lang="en">

<?php
    include "head.php";
    include "connect.php";
    include "popup_themthanhcong.php";
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
                <form action="themvaogiohang.php?from=pd" method="get" id="myForm">
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
                            <img src="assets/images/products/<?php echo $masp ?>/<?php echo $row['LINKANH'] ?>" alt=""
                                width="500" height="500">
                        </div>
                        <div class="product-attribute">
                            <h3 class="title"><?php echo $row['TENSP'] ?></h3>
                            <!-- danh giá san phâm -->
                            <div class="rating">
                                <p class="star-rating"><span class="width-80percent"></span></p>


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
                                <ins><span style="margin-left: 15px !important" class="price-amount"><span
                                            class="currencySymbol"><?php echo $szr['MASIZE'] ?> -
                                        </span><?php echo number_format($szr['DONGIASP']) ?> đ</span></ins>
                                <del><span class="price-amount"><span
                                            class="currencySymbol"></span><?php echo number_format($szr['DONGIASP']+10000) ?>
                                        đ</span></del>
                                </input>
                            </div>
                            <?php }} ?>
                            <?php
                                if ($masp=="MC"){
                                    ?>
                            <div style="margin-top: 25px !important">
                                <span class="title">Cấp độ:</span>
                                <div style="margin-top: 15px !important; width: 20% !important;"
                                    class="form_combobox w-100">
                                    <select style="color: black !important; margin-left: 10px !important; "
                                        name="level">
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
                            <div class="action-form"
                                style="width: 100% !important; background-color: white !important;">
                            </div>
                        </div>
                        <div class="action-form">
                            <div class="quantity-box">
                                <span class="title">Số lượng:</span>
                                <div style="width: 100% !important;" class="qty-input">
                                    <input style="width: 100% !important;" type="text" name="qty12554" value="1"
                                        data-max_value="20" data-min_value="1" data-step="1">
                                    <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up"
                                            aria-hidden="true"></i></a>
                                    <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="buttons">
                                <button type="submit" name="sb_giohang" style="min-width: 100% !important;"
                                    class="btn add-to-cart-btn">Thêm vào giỏ hàng</button>
                                <button type="submit" name="sb_dathang" style="min-width: 100% !important;"
                                    class="btn buy-now-btn">Đặt hàng ngay</button>
                            </div>
                            <div class="social-media">
                                <ul class="social-list">
                                    <li><a href="#" class="social-link"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="social-link"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="social-link"><i class="fa fa-pinterest"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="social-link"><i class="fa fa-share-alt"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="social-link"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a></li>
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
                        this.action =
                            "themvaogiohang.php?sb_giohang"; // Thay đổi trang khi nhấp nút "Submit for Page 1"
                    } else if (submitButton.name === "sb_dathang") {
                        this.action = "thanhtoan.php"; // Thay đổi trang khi nhấp nút "Submit for Page 2"
                    }
                });
                </script>
                <div class="product-related-box single-layout">
                    <div class="biolife-title-box lg-margin-bottom-26px-im">

                        <h3 class="main-title">Đánh giá sản phẩm <i class="fa-solid fa-pen-to-square"
                                style="font-size:3rem ;"></i></h3>
                    </div>

                    <div class="row contain ">

                        <?php
                         $spid = $_GET['id'];
                             $danhgia = "SELECT  danhgiasp.MAHOADON,danhgiasp.MASP,danhgiasp.EMAIL,danhgiasp.NOIDUNGDG, danhgiasp.CHATLUONGSP,danhgiasp.TGDANHGIA FROM
                             danhgiasp, chitiethoadon WHERE danhgiasp.MAHOADON = chitiethoadon.MAHOADON
                             AND chitiethoadon.MASP = '$spid' ORDER BY MAHOADON DESC";
                            $rs_danhgia = $conn->query($danhgia);
                                while( $dgia = $rs_danhgia -> fetch_assoc()) {           
                        ?>
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 shadow-sm p-3 mb-5 bg-body rounded"
                            style=" border: 1px solid #f1f1f1 ;box-shadow: 10px 10px 10px #f1f1f1; margin-top: 2rem; padding: 1rem;">
                            <div>

                                <b>
                                    <span>
                                        <i class="fa-solid fa-circle-user" style="font-size:5rem ;"></i>
                                        <p style="margin-left: 6rem; margin-top:-4.5rem ;"><?php echo $dgia['EMAIL'] ?>
                                        </p>

                                    </span>
                                </b>
                                <p style="margin-left: 6rem; "><i class="fa-solid fa-earth-americas"></i>
                                    <?php echo $dgia['TGDANHGIA'] ?></p>
                            </div>
                            <div style="margin-top: 2rem;">
                                <span>
                                    <b>Chất lượng sản phẩm: <span
                                            class="text-info"><?php  echo $dgia['CHATLUONGSP']; ?></span> </b>
                                </span>
                            </div>
                            <div style="margin-top: 2rem;">
                                <?php echo $dgia['NOIDUNGDG']; ?>
                            </div>
                            <div class="row" style="margin-top: 2rem;">
                                <?php
                                $anh = "SELECT * FROM ANHDANHGIA WHERE MASP = '".$dgia['MASP']."' AND EMAIL = '".$dgia['EMAIL']."' AND MAHOADON ='".$dgia['MAHOADON']."'";
                                $rs_anh = $conn->query($anh);
                                    while( $rowanh = $rs_anh -> fetch_assoc()) {   
                                            
                            ?>
                                <div class="col-sm-4 " style="padding: 1rem; width: 15%;">
                                    <img width="120rem" height="120rem"
                                        src="assets/images/comment/<?php echo $rowanh['LINKANH']?>" alt="shipping cart">
                                </div>
                                <?php } ?>
                            </div>

                        </div>
                        <?php } 
                        $tongdg ="SELECT SUM(tongdg) AS Tongdg
                        FROM (
                            SELECT COUNT(*) as tongdg
                            FROM danhgiasp
                            WHERE MAHOADON IN (
                                SELECT MAHOADON
                                FROM chitiethoadon
                                WHERE MASP = '$spid'
                            )
                            GROUP BY CHATLUONGSP
                        ) as tong";
                        $kt_dg = $conn->query($tongdg);
                        $tong = $kt_dg->fetch_assoc(); 
                        ?>

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12"
                            style="border: 1px solid #f1f1f1 ;box-shadow: 10px 10px 10px #f1f1f1; padding:2rem;transform: scale(0.8) translate(112rem, -8%);position: absolute;">
                            <div>
                                <h3> <b><span><?php echo $tong['Tongdg']?></span> đánh giá được chia sẽ</b></h3>
                                <hr>
                                <?php
                                     $chatluongsp = "SELECT COUNT(*) as sl,CHATLUONGSP FROM danhgiasp,chitiethoadon 
                                      WHERE danhgiasp.MAHOADON = chitiethoadon.MAHOADON
                                      AND chitiethoadon.MASP = '$spid'
                                      GROUP BY (CHATLUONGSP)";
                                      $kt3 = $conn->query($chatluongsp);
                                      $kt4 = $conn->query($chatluongsp);
                                      while($gt = $kt4->fetch_assoc()){
                                        ?>
                                <p style="padding-left: 6rem;">
                                    <span style="color:#dba70c; font-size:4rem"><?php  echo $gt['sl'] ?></span>
                                    <?php echo $gt['CHATLUONGSP'] ?>
                                </p>
                                <?php
                                    }
                                ?>
                                <hr>
                            </div>
                            <!-- chart -->

                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                            google.charts.load("current", {
                                packages: ["corechart"]
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ["Element", "Đánh giá", {
                                        role: "style"
                                    }],
                                    <?php
                                    while($gt = $kt3->fetch_assoc()){
                                        echo'["'.$gt['CHATLUONGSP'].'", '.$gt['sl'].', "#65ba15"],';
                                    }

    ?>
                                ]);

                                var view = new google.visualization.DataView(data);
                                view.setColumns([0, 1,
                                    {
                                        calc: "stringify",
                                        sourceColumn: 1,
                                        type: "string",
                                        role: "annotation"
                                    },
                                    2
                                ]);

                                var options = {
                                    title: "Đánh giá món ăn",
                                    width: 280,
                                    height: 240,
                                    bar: {
                                        groupWidth: "95%"
                                    },
                                    legend: {
                                        position: "none"
                                    },
                                };
                                var chart = new google.visualization.BarChart(document.getElementById(
                                    "barchart_values"));
                                chart.draw(view, options);
                            }
                            </script>
                            <div id="barchart_values" style="width: 800px; height: 300px;"></div>

                            </script>
                            <div id="chart_div"></div>
                        </div>

                    </div>



                </div>
                <!-- related products -->
                <div class="product-related-box single-layout">
                    <div class="biolife-title-box lg-margin-bottom-26px-im">
                        <span class="biolife-icon icon-organic"></span>
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Các món tương tự</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile"
                        data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
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
                                        <img src="assets/images/products/<?php echo $masp ?>/<?php echo $row1['LINKANH'] ?>"
                                            alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <h4 class="product-title"><a href="#"
                                            class="pr-name"><?php echo $row1['TENSP'] ?></a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span
                                                    class="currencySymbol"></span><?php echo number_format($row1['DONGIASP']) ?>
                                                đ</span></ins>
                                        <del><span class="price-amount"><span
                                                    class="currencySymbol"></span><?php echo number_format($row1['DONGIASP']+10000) ?>
                                                đ</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <div class="buttons">
                                            <a href="#"
                                                style="padding: 10px 5px !important; margin-right: 5px !important;"
                                                class="btn add-to-cart-btn">đặt hàng ngay</a>
                                            <a href="#" style="padding: 0 !important; width: 10px !important;"
                                                class="btn"></a>
                                            <a href="#" style="padding: 10px 5px !important; "
                                                class="btn add-to-cart-btn">thêm vào giỏ</a>
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