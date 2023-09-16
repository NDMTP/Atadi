<?php

include('connect.php');
function addToCart($product) {
    if (!isset($_SESSION['cart_temp'])) {
        $_SESSION['cart_temp'] = array();
    }
    $found = false;
    foreach ($_SESSION['cart_temp'] as &$item) {
        if ($item['id'] === $product['id'] and $item['size'] === $product['size'] and $item['level'] === $product['level']) {
            $found = true;
            break;  
        }
    }
    if (!$found) {
        $_SESSION['cart_temp'][] = array(
            'id' => $product['id'],
            'quant' => $product['quant'],
            'level' => $product['level'],
            'size' => $product['size']
        );
    }
}

$pdid = $_POST['pdid'];
$size = $_POST['size'];
if (isset($_POST['level'])) $lv = $_POST['level'];
else $lv = "";
$qty = $_POST['qty12554'];
$productToAdd = array(
    'id' => $pdid,
    'quant' => $qty,
    'level' => $lv,
    'size' => $size,
);

if (isset($_SESSION["lname"])){
    addToCart($productToAdd);
    

} else {
    header('Location: login.php?login=1');
}
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
$_SESSION['temptotal'] = $tong;
 echo number_format($tong);
?>