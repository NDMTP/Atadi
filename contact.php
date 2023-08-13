<!DOCTYPE html>
<html class="no-js" lang="en">

<?php
include "head.php"
?>
<body class="biolife-body">

    <!-- Preloader -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>

<?php
include "header.php"
?>

    <div class="page-contain contact-us">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="wrap-map biolife-wrap-map" id="map-block">
                <iframe
                        width="1920"
                        height="591"
                        src="https://maps.google.com/maps?width=100%&amp;height=263&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=p&amp;z=15&amp;iwloc=B&amp;output=embed"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0">
                </iframe>
            </div>

            <div class="container">

                <div class="row">

                    <!--Contact info-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                            <h4 class="box-title">Liên hệ với chúng tôi</h4>
                            <p class="frst-desc">Trái ngược với niềm tin phổ biến, Atadi đem lại khẩu vị ngon cho người dùng. Nó bắt nguồn từ Hàn Quốc , hãy đến với cửa hàng của chúng tôi để trải nghiệm.</p>
                            <ul class="addr-info">
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Địa chỉ:</b>
                                        <p class="dsc">123 Đường 3/2 <br>Quận Ninh Kiều, TPCT</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Số điện thoại:</b>
                                        <p class="dsc">(84) 123 456789</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Email:</b>
                                        <p class="dsc">Atadi@gmail.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Giờ mở cửa:</b>
                                        <p class="dsc">8g sáng - 8g tối, Thứ Hai - Thứ Bảy</p>
                                        <p class="dsc">9g sáng - 9g tối, Chủ nhật</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="biolife-social inline">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Contact form-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form-container sm-margin-top-112px">
                            <form action="#" name="frm-contact" >
                                <p class="form-row">
                                    <input type="text" name="name" value="" placeholder="Tên của bạn" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <input type="email" name="email" value="" placeholder="Email " class="txt-input">
                                </p>
                                <p class="form-row">
                                    <input type="tel" name="phone" value="" placeholder="Số điện thoại" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <textarea name="mes" id="mes-1" cols="30" rows="9" placeholder="Nội dung phản hồi"></textarea>
                                </p>
                                <p class="form-row">
                                    <button class="btn btn-submit" type="submit">Gửi tin nhắn</button>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php"
?>

    <!--Footer For Mobile-->
    <div class="mobile-footer">
        <div class="mobile-footer-inner">
            <div class="mobile-block block-menu-main">
                <a class="menu-bar menu-toggle btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                    <span class="fa fa-bars"></span>
                    <span class="text">Menu</span>
                </a>
            </div>
            <div class="mobile-block block-sidebar">
                <a class="menu-bar filter-toggle btn-toggle" data-object="open-mobile-filter" href="javascript:void(0)">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    <span class="text">Sidebar</span>
                </a>
            </div>
            <div class="mobile-block block-minicart">
                <a class="link-to-cart" href="#">
                    <span class="fa fa-shopping-bag" aria-hidden="true"></span>
                    <span class="text">Cart</span>
                </a>
            </div>
            <div class="mobile-block block-global">
                <a class="menu-bar myaccount-toggle btn-toggle" data-object="global-panel-opened" href="javascript:void(0)">
                    <span class="fa fa-globe"></span>
                    <span class="text">Global</span>
                </a>
            </div>
        </div>
    </div>

    <div class="mobile-block-global">
        <div class="biolife-mobile-panels">
            <span class="biolife-current-panel-title">Global</span>
            <a class="biolife-close-btn" data-object="global-panel-opened" href="#">&times;</a>
        </div>
        <div class="block-global-contain">
            <div class="glb-item my-account">
                <b class="title">My Account</b>
                <ul class="list">
                    <li class="list-item"><a href="#">Login/register</a></li>
                    <li class="list-item"><a href="#">Wishlist <span class="index">(8)</span></a></li>
                    <li class="list-item"><a href="#">Checkout</a></li>
                </ul>
            </div>
            <div class="glb-item currency">
                <b class="title">Currency</b>
                <ul class="list">
                    <li class="list-item"><a href="#">€ EUR (Euro)</a></li>
                    <li class="list-item"><a href="#">$ USD (Dollar)</a></li>
                    <li class="list-item"><a href="#">£ GBP (Pound)</a></li>
                    <li class="list-item"><a href="#">¥ JPY (Yen)</a></li>
                </ul>
            </div>
            <div class="glb-item languages">
                <b class="title">Language</b>
                <ul class="list inline">
                    <li class="list-item"><a href="#"><img src="assets/images/languages/us.jpg" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="assets/images/languages/fr.jpg" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="assets/images/languages/ger.jpg" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="assets/images/languages/jap.jpg" alt="flag" width="24" height="18"></a></li>
                </ul>
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