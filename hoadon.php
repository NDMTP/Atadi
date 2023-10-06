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
                <?php 
                if(isset($_SESSION['email'])){
            ?>
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
                                                $text_col = "#11d12e";
                                              } 
                                              elseif($row["TRANGTHAIHOADON"]==0){
                                                $status ="Chưa Thanh toán";
                                                $text_col = "#ff7300";
                                              }   
                                              else{
                                                $status ="Đã Hủy";
                                                $text_col = "#f00";
                                              }      
                                                ?>
                            <table class="table dg"
                                style="margin-top: 3rem ;  border: 1px solid #ccc ;box-shadow: 10px 10px 10px #E6E6E6;">
                                <form action="mualai.php" method="get" id="formMualai">
                                    <table class="table"
                                        style="margin-top: 3rem ;  border: 1px solid #ccc ;box-shadow: 10px 10px 10px #E6E6E6;">
                                        <thead>
                                            <tr>
                                                <td scope="col" style="float:left; color: grey;"
                                                    class="product-thumbnail">
                                                    <h5 style="margin: 0 !important"><?php echo $row['NGAYLAP'] ?></h5>
                                                </td>
                                                <td class="product-price"></td>
                                                <td class="product-quantity"></td>
                                                <td scope="col"
                                                    style="float:right; color: <?php echo $text_col ?>; font-weight: bold;">
                                                    <span class="<?php echo $text_col ?>">
                                                        <?php echo $status ?>
                                                </td>
                                                </span>
                                            </tr>
                                        </thead>
                                        <tbody class="dg">
                                            <?php
                                        $cthd = "SELECT * FROM chitiethoadon WHERE MAHOADON = '".$row['MAHOADON']."' ";;
                                        $cthd_result = $conn->query($cthd);
                                while($row1 = $cthd_result->fetch_assoc() ){

                                            $masp = preg_replace('/[0-9]/', '', $row1['MASP']);
                                            $sp = "SELECT * FROM sanpham WHERE MASP = '".$row1['MASP']."'";
                                            $kq = $conn->query($sp);
                                            $sp = $kq->fetch_assoc();
                                    ?>
                                            <tr class="pd cart_item">
                                                <td class="product-thumbnail row" data-title="Product Name"
                                                    style="display: flex; flex-direction: row; justified-content: center; align-items: center; margin-left: 0;">
                                                    <a class="prd-thumb" href="#">
                                                        <figure><img width="113" height="113"
                                                                src="assets/images/products/<?php echo $masp."/".$sp['LINKANH']?>"
                                                                alt="shipping cart">
                                                        </figure>
                                                    </a>
                                                    <a class="prd-name"
                                                        href="#"><?php echo $sp['TENSP']." - Size: ".$row1['MASIZE']?></a>
                                                </td>
                                                <td class="product-price" data-title="Price" style="padding-top:3.5rem">
                                                    <div class="price price-contain">
                                                        <ins><span class="price-amount"><span
                                                                    class="currencySymbol"></span><?php echo number_format($row1['DONGIABAN']) ?>
                                                                đ</span></ins>
                                                    </div>
                                                </td>
                                                <td style="padding-top:4rem">
                                                    <b>Số lượng: <?php echo $row1['SOLUONGSP'] ?></b>

                                                </td>
                                                <td style="padding-top:4rem">
                                                    <b><?php echo number_format($row1['TONGTIEN']) ?> đ</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="product-price section_show" style="display:none;">
                                                    <form action="danhgia.php" method="post" name="forms"
                                                        style=" padding:2rem;margin-top:2rem;">
                                                        <a style="float:right" class="close">
                                                            <i class="fa-solid fa-xmark"></i>
                                                        </a>
                                                        <div class="dg1 row" style="margin-top:2rem;">
                                                            <h3><b>Đánh giá sản phẩm</b>
                                                            </h3>
                                                            <div class="col-lg-4">
                                                                <div>
                                                                    <img src="assets/images/products/<?php echo $masp."/".$sp['LINKANH']?>"
                                                                        alt="loi">
                                                                    <p><?php echo $sp['TENSP'] ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="danhgia" value="Kém">
                                                                    <label class="form-check-label text-danger"
                                                                        for="flexRadioDefault1">
                                                                        <b> Kém</b>
                                                                    </label>
                                                                </div>
                                                                <div class="form-check ">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="danhgia" value="Trung Bình">
                                                                    <label class="form-check-label text-warning"
                                                                        for="flexRadioDefault2">
                                                                        <b> Trung bình</b>
                                                                    </label>
                                                                </div>
                                                                <div class="form-check ">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="danhgia" value="Khá Tốt">
                                                                    <label class="form-check-label text-info"
                                                                        for="flexRadioDefault2">
                                                                        <b>Khá Tốt</b>
                                                                    </label>
                                                                </div>
                                                                <div class="form-check ">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="danhgia" value="Tuyệt Vời">
                                                                    <label class="form-check-label text-success"
                                                                        for="flexRadioDefault2">
                                                                        <b> Tuyệt vời</b>
                                                                    </label>
                                                                </div>
                                                            </div>


                                                            <div class="form-floating" style="margin-top: 2rem;">
                                                                <textarea class="nd form-control"
                                                                    placeholder="Hãy chia sẽ những điều bạn thích về món ăn cho mọi người biết nhé!"
                                                                    style="height: 100px" name="noidung"></textarea>

                                                            </div>
                                                            <div>
                                                                <input type="hidden" name="hoadon" class="hd"
                                                                    value="<?php echo $row['MAHOADON'] ?>">
                                                                <input type="hidden" name="masp" class="masp"
                                                                    value="<?php echo $row1['MASP'] ?>">
                                                            </div>
                                                            <div style="margin-top: 2rem; ">
                                                                <input type="file" multiple="multiple" id="fileToUpload"
                                                                    class="anh"
                                                                    style="border: 1px solid #ccc;padding: 1rem;">

                                                                <b class="tb" style=" color:white;">
                                                                    CẢM ƠN BẠN ĐÃ DÁNH GIÁ
                                                                </b>
                                                                <button class="sb btn btn-danger"
                                                                    style="float: right;">Hoàn
                                                                    thành</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <?php }?>
                                            <tr>
                                                <td colspan="3"> </td>
                                                <td>
                                                    <div
                                                        style="color: #ff7300; font-weight: bold; text-align: right; padding: 1rem;">
                                                        <i class="fa-solid fa-shield-halved"></i> Thành tiền:
                                                        <?php echo number_format($row['TONGTIEN']) ?> Đ
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td scope="col">
                                                    <section style="text-align: right; padding: 1rem">

                                                        <button type="submit" class="btn"
                                                            style="margin-right:1rem; background-color: #ff7300; color: white">
                                                            Mua Lại
                                                        </button>

                                                        <?php
                                                        $sql1 = "SELECT * FROM danhgiasp WHERE MAHOADON ='".$row['MAHOADON']."'";
                                                        $result1 = $conn->query($sql1);
                                                        $kttt = $result1->fetch_assoc();
                                                        $kt= " "  ;           
                                                        if($result1->num_rows>0){
                                                            $kt ="Đã đánh giá";
                                                                echo '
                                                    <button type="button" class="btn" style=" background: black; color:white ">
                                                    '.$kt.'
                                                    </button>
                                                        ';
                                                                                   
                                                        }    
                                                    else{
                                                        $sql3 = "SELECT * FROM hoadon WHERE MAHOADON ='".$row['MAHOADON']."'";
                                                            $result3 = $conn->query($sql3);
                                                            $kttt = $result3->fetch_assoc();
                                                        if($kttt['TRANGTHAIHOADON']==-1){
                                                            $kt ="Đơn hàng đã được hủy";
                                                            echo '
                                                            <button type="button" class="btn btn-outline-secondary">
                                                            '.$kt.'
                                                            </button>
                                                            ';
                                                        } else{
                                                            $kt ="Đánh giá";
                                                        echo '
                                                            <button type="button" class="btn_check btn" style=" background: black; color:white ">
                                                            '.$kt.'
                                                            </button>
                                                            ';
                                                        }
                                                        }      

                                                                            ?>

                                                    </section>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <?php
                             } 
                                ?>
                        </div>
                    </div>
                </div>
                <?php 
                    }else {
                        echo '<div class="shpcart-subtotal-block">';
                        echo '<h2>Lịch sử đơn hàng</h2>';
                        echo '<div class="btn-checkout">';
                        echo '   <a href="category-grid.php" class="btn checkout w-25">Xem tất cả sản phẩm</a>';
                        echo '</div>';
                        echo '</div>';
                        
                    }
                ?>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $(".btn_check").click(function() {
            var e = $(this).closest(".dg").find(".section_show");
            e.css("display", "block");
        });
        $(".close").click(function() {
            var e = $(this).closest(".dg").find(".section_show");
            e.css("display", "none");
        });
        $(".anh").change(function() {
            var fileList = [];
            var files = $(this)[0].files;
            for (var i = 0; i < files.length; i++) {
                fileList.push(files[i].name);
            }
        });
        $(".sb").click(function(event) {
            event.preventDefault();
            var cl = document.getElementsByName("danhgia");
            var cl1 = " ";
            for (var i = 0; i < cl.length; i++) {
                if (cl[i].checked) {
                    cl1 = cl[i].value;
                    break;
                }
            }
            var nd = $(this).closest(".dg1").find(".nd").val();
            var hienthi = $(this).closest(".dg1").find(".tb");
            var masp = $(this).closest(".dg1").find(".masp").val();
            var hd = $(this).closest(".dg1").find(".hd").val();
            var selectedFiles = $(this).closest(".dg1").find(".anh")[0].files;
            var formData = new FormData();
            formData.append("nd", nd);
            formData.append("masp", masp);
            formData.append("hd", hd);
            formData.append("cl1", cl1);
            for (var i = 0; i < selectedFiles.length; i++) {
                formData.append("selectedFiles[]", selectedFiles[i]);
            }
            $.ajax({
                url: "danhgia.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data == 1) {
                        hienthi.css("color", "green");
                    } else {
                        alert('LỖIIIIIIIIIII')
                    }
                }
            });
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