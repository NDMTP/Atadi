<?php
include('connect.php');



if(isset($_POST['tong'])){

    $gt = $_POST['tong'];
    $tl = 0;

    $dks = array();
    $sale = "select * from khuyenmai where sysdate()<=NGAYKT";
    $rs = $conn->query($sale);
    $rsa = $rs -> fetch_all(MYSQLI_ASSOC);
    foreach ($rsa as $s) {
        if ($gt > $s['DIEUKIENKM']){
            $tl = $s['PHANTRAMKM'];
        }
    }

    echo $tl;

}
else{
    echo'loi';
}
?>