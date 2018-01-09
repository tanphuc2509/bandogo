<?php 
    include("../../lib/DataProvider.php");
    if(isset($_GET["MaDonDatHang"]))
    {
        $MaDonDatHang = $_GET["MaDonDatHang"];
        $sql = "DELETE FROM DonDatHang
                WHERE MaDonDatHang = $MaDonDatHang";
        if(DataProvider::execQuery($sql))
        { 
            DataProvider::ChangeURL("../index.php?key=donhang");
        }
        else
            echo "Xoa That bai";
    }
?>