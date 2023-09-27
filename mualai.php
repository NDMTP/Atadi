<?php
    require 'connect.php';

    $_SESSION['cart'] = array();
    $_SESSION['slsp'] = 0;
    function addToCart($product) {
        $_SESSION['cart'][] = array(
            'id' => $product['id'],
            'quant' => $product['quant'],
            'level' => $product['level'],
            'size' => $product['size']
        );
        $_SESSION['slsp']+=$product['quant'];
    }

    $mahd = $_GET['hoadon'];

    $sql = "select * from chitiethoadon where MAHOADON = $mahd";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $result = $conn->query($sql);
        $result_all = $result -> fetch_all(MYSQLI_ASSOC);
        foreach ($result_all as $row) {
            $pdid = $row['MASP'];
            $qty = $row['SOLUONGSP'];
            if ($row['DOCAY']!=null){
                $lv = $row['DOCAY'];
            } else $lv = "";
            $size = $row['MASIZE'];

            $productToAdd = array(
                'id' => $pdid,
                'quant' => $qty,
                'level' => $lv,
                'size' => $size
            );

            addToCart($productToAdd);

        }
    }
    header('Location: cart-page.php');
?>