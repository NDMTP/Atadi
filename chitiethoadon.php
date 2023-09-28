<style>
    .bill{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
</style>

<a href="index.php">ATADI</a>

<div class="bill">
    <h3>HOÁ ĐƠN ATADI</h3>
    <?php
        require 'connect.php';
        $sql = "SELECT ct.*, sp.* FROM hoadon hd 
                join chitiethoadon ct on ct.MAHOADON = hd.MAHOADON 
                join sanpham sp on sp.MASP = ct.MASP 
                where hd.MAHOADON = {$_GET['hdid']}";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $result = $conn->query($sql);
            $result_all = $result -> fetch_all(MYSQLI_ASSOC);
            echo '<table style="margin-top: 10px !important; min-width: 30rem; border: 1px solid grey;">';
            echo '<tr><th>Tên SP</th><th>Size</th><th>Số lượng</th><th>Đơn giá</th><th>Tổng tiền</th></tr>';
            $tamtinh = 0;
            foreach ($result_all as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['TENSP'] . '</td>';
                    echo '<td>' . $row['MASIZE'] . '</td>';
                    echo '<td>' . $row['SOLUONGSP'] . '</td>';
                    echo '<td>' . number_format($row['DONGIABAN']) . ' đ</td>';
                    echo '<td>' . number_format($row['DONGIABAN']*$row['SOLUONGSP']) . ' đ</td>';
                    echo '</tr>';
                    $tamtinh += ($row['DONGIABAN']*$row['SOLUONGSP']);
            }
            
                echo '</table>';
        }

        $giam = 0;
        $sql = "select km.PHANTRAMKM from hoadon hd join khuyenmai km on km.MAKM = hd.MAKM where hd.MAHOADON={$_GET['hdid']}";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $giam = ($row["PHANTRAMKM"]/100) * $tamtinh; 
        }
        $tt = $tamtinh - $giam;

    ?>
    <div style="margin-top: 1rem; font-size: 20px;">
        Tổng tiền tạm tính: <?php echo number_format($tamtinh) ?> đ <br>
        Giảm: <?php echo number_format($giam) ?> đ <br> 
        Thành tiền: <?php echo number_format($tt) ?> đ <br> 
    </div>
</div>
