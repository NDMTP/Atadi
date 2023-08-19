<?php

session_start(); // Bắt đầu phiên làm việc

// Hàm thêm sản phẩm vào giỏ hàng
function addToCart($product) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] === $product['id'] and $item['size'] === $product['size'] and $item['level'] === $product['lv']) {
            $item['quant'] += $product['quant'];
            $found = true;
            break;  
        }
    }

    // Nếu chưa tồn tại, thêm sản phẩm mới vào giỏ hàng
    if (!$found) {
        $_SESSION['cart'][] = array(
            'id' => $product['id'],
            'quant' => $product['quant'],
            'level' => $product['level'],
            'size' => $product['size']
        );
    }
}

$pdid = $_GET['pdid'];
$size = $_GET['size'];
if (isset($_GET['level'])) $lv = $_GET['level'];
else $lv = "";
$qty = $_GET['qty12554'];

// Thêm sản phẩm vào giỏ hàng

$productToAdd = array(
    'id' => $pdid,
    'quant' => $qty,
    'level' => $lv,
    'size' => $size,
);

addToCart($productToAdd);

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Qty</th><th>LV</th><th>Size</th></tr>';

    foreach ($_SESSION['cart'] as $item) {
        echo '<tr>';
        echo '<td>' . $item['id'] . '</td>';
        echo '<td>' . $item['quant'] . '</td>';
        echo '<td>' . $item['level'] . '</td>';
        echo '<td>' . $item['size'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'Your cart is empty.';
}

?>