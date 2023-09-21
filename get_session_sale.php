<?php
session_start(); // Bắt đầu phiên làm việc với session

$response = array();

if(isset($_SESSION['dksale'])) {
    $response['dksale'] = $_SESSION['dksale'];
} else {
    $response['dksale'] = array(); // Trả về một mảng trống nếu không có dữ liệu trong session
}

header('Content-Type: application/json');
echo json_encode($response);
?>
