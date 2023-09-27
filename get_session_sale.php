<?php
include('connect.php');
if(isset($_POST['test'])){
    echo $_POST['tong'];
}
else{
    echo'loi';
}
?>