<?php
include('connect.php');
if(isset($_POST['check'])){
        $tong = 0;
        foreach ($_SESSION['cart_temp'] as $item) {
            $ma = $item['id'];
            $kt = $item['size'];

            $sql = "SELECT * FROM sanpham s JOIN sizecuasanpham sz ON sz.MASP = s.MASP 
                    WHERE sz.MASP = '$ma' AND sz.MASIZE = '$kt'";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $tong = $tong + ($item['quant'] * $row['DONGIASP']);
            } 
        }
        $ttien = $tong - $_POST['dg']*$_POST['qty12554'];
        // echo number_format($ttien );
        echo $ttien;
        if(isset($_SESSION['cart_temp']) && is_array($_SESSION['cart_temp']) && !empty($_SESSION['cart_temp'])) {
            $key = $_POST['ma'];
            $size = $_POST['size'];
        
            $_SESSION['cart_temp'] = array_filter($_SESSION['cart_temp'], function($value) use ($key, $size) {
                return !($value['id'] === $key && $value['size'] === $size);
            });
        } else {
            echo 'loi';
        }
}
?>