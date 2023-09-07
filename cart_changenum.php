<?php
session_start();
if(isset($_POST['check'])){
    $check = $_POST['check'];
        $ma = $_POST['ma'];
        $num = $_POST['num'];
        $size = $_POST['size'];
        $tong = 0;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] === $ma and $item['size'] === $size ) {
                if($num>$item['quant']){
                    $item['quant'] = $item['quant']+1;
                    echo  $item['quant'];
                }
                elseif($num<$item['quant']){
                    $item['quant'] = $item['quant']-1;
                    echo  $item['quant'];
                }
            }
            $tong = $tong + $item['quant'];
        }
        $_SESSION['slsp']=  $tong;
    }
   
?>