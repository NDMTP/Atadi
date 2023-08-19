<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
include "head.php";
include "connect.php"
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

    <!-- HEADER -->
    <?php
    include "header.php";

    if (isset($_GET['login'])){
        ?>
         <div id="popup" class="popup">
            <div class="popup-content">
                <p>Vui lòng đăng nhập để thêm vào giỏ hàng!</p>
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




    <div class="page-contain login-page">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                <div class="row">

                    <!--Form Đăng nhập-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="signin-container">
                            <h2>Đăng nhập</h2>
                            <form action="dangnhap.php" name="frm-login" method="post">
                                <p class="form-row">
                                    <label for="fid-name">Email:<span class="requite text-danger"> *</span></label>
                                    <input type="email" id="email" name="email" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-pass">Mật khẩu:<span class="requite  text-danger"> *</span></label>
                                    <input type="password" id="matkhau" name="password" value="" class="txt-input">
                                </p>
                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" type="submit" name="sb1">Đăng nhập</button>
                                    <a href="doimk.php" class="link-to-help">Quên mật khẩu</a>
                                </p>
                            </form>


                        </div>
                    </div>
                    <!--Form Đăng kí-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="signin-container">
                            <h2>Đăng kí</h2>
                            <form action="dangki.php" name="frm-login" method="post">
                                <p class="form-row">
                                    <label for="fid-name">Email:<span class="requite  text-danger"> *</span></label>
                                    <input type="email" id="fid-name" name="email" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-pass">Mật khẩu:<span class="requite  text-danger"> *</span></label>
                                    <input type="password" id="fid-pass" name="matkhau" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-pass">Mật khẩu nhập lại:<span class="requite  text-danger">
                                            *</span></label>
                                    <input type="password" id="fid-pass" name="matkhau" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-name">Họ tên:<span class="requite"></span></label>
                                    <input type="text" id="fid-name" name="hoten" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-name">Địa chỉ:<span class="requite"></span></label>
                                    <input type="text" id="fid-name" name="diachi" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-name">Số điện thoại:<span class="requite"></span></label>
                                    <input type="text" id="fid-name" name="sdt" value="" class="txt-input">
                                </p>

                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" type="submit" name="sb">Đăng ký</button>
                                </p>
                            </form>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>
    <?php
    include"footer.php"
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