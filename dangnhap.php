<?php

include("connect.php");
                if(isset($_POST["sb1"])){
                    
                    $sql="SELECT * FROM nguoidung where email='".$_POST["email"]."' AND matkhau='".md5($_POST["password"])."'";
                    $result1 = $conn->query($sql);
                  // print_r($result1);
                    if($result1->num_rows>0){
                        
                        $row = $result1->fetch_assoc();
                        
                        session_start();
                        $_SESSION["email"] = $row["EMAIL"];
                        $_SESSION["password"]=$row["MATKHAU"];
                        $_SESSION["diachi"]=$row["DIACHI"];
                        $_SESSION["hoten"]=$row["TEN"];
                        $_SESSION["sdt"]=$row["SDT"];
                   
                        header('Location: index.php');
                     
/*
                        echo $_SESSION["name"]."<br>==";
                        echo $_SESSION["ngaysinh"]."<br>==";
                        echo $_SESSION["sdt"];
                        
    */ 
                    }
                    else{
                 
                        echo '<script language="javascript">
                    alert("Nhập sai email hoặc mật khẩu.");
                    history.back();
                     </script>';
                      
                    }
                   
                    }
                
                ?>