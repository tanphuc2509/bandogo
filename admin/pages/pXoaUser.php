<?php 
    include("../../lib/DataProvider.php");
    if(isset($_GET["MaTaiKhoan"]))
    {
        $MaTaiKhoan = $_GET["MaTaiKhoan"];
        $sql = "DELETE FROM taikhoan
                WHERE MaTaiKhoan = $MaTaiKhoan";
        if(DataProvider::execQuery($sql))
        { 
            DataProvider::ChangeURL("../index.php?key=user");
        }
        else
            echo "Xoa That bai";
    }
?>