<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanmicay";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
if(isset($_POST["sb"])){
    $sql=" UPDATE nguoidung SET MATKHAU='".$_POST["matkhau"]."',DIACHI='".$_POST["diachi"]."',
    TEN='".$_POST["ten"]."',SDT='".$_POST["sdt"]."',PHANQUYEN='".$_POST["phanquyen"]."' WHERE email='".$_SESSION["email"]."'
    ";
    $result = $conn->query($sql);
    if($result){
        echo '<script language="javascript">
        alert("Đã lưu thông tin!");
        window.location.href = "index.php"; // Chuyển hướng về trang chủ
        </script>';
    } else {
        echo '<script language="javascript">
        alert("Không thể cập nhật!");
        history.back();
        </script>';
    }
}

if(isset($_POST["sbpsw"])){
    $sql1 = "select * from nguoidung
    where email = '".$_SESSION["email"]."' 
    and matkhau = '".md5($_POST["psw2"])."'";
    $result = $conn->query($sql1);
    if($result->num_rows > 0){
        if($_POST["psw"]== $_POST["psw2"]){
            echo '<script language="javascript">
            alert("Mật khẩu cũ không được giống mật khẩu mới!");
            history.back();
            </script>';
        } elseif($_POST["psw"] != $_POST["psw1"]){
            echo '<script language="javascript">
            alert("Mật khẩu nhập lại không khớp!");
            history.back();
            </script>';
        } else {
            $sql=" UPDATE nguoidung set matkhau ='".md5($_POST["psw"])." ' 
            where email = '".$_SESSION["email"]." '";
            $result1 = $conn->query($sql);
            echo '<script language="javascript">
            alert("Đổi mật khẩu thành công!");
            window.location.href = "index.php"; // Chuyển hướng về trang chủ
            </script>';
        }
    } else {
        echo '<script language="javascript">
        alert("Mật khẩu cũ không đúng!");
        history.back();
        </script>';
    }
}

?>
