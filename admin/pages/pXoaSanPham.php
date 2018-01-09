<?php 
    include("../../lib/DataProvider.php");
    if(isset($_GET["MaSanPham"]))
    {
        $MaSanPham = $_GET["MaSanPham"];
        $sql = "DELETE FROM SanPham
                WHERE MaSanPham = $MaSanPham";
        if(DataProvider::execQuery($sql))
        { 
            DataProvider::ChangeURL("../index.php?key=sp");
        }
        else
            echo "Xoa That bai";
    }
?>