<?php 
    include("../../lib/DataProvider.php");
    if(isset($_GET["MaHangSanXuat"]))
    {
        $MaHangSanXuat = $_GET["MaHangSanXuat"];
        $sql = "DELETE FROM HangSanXuat
                WHERE MaHangSanXuat = $MaHangSanXuat";
        if(DataProvider::execQuery($sql))
        {
            DataProvider::ChangeURL("../index.php?key=hsx");
        }
        else
            echo "Xoa That bai";
    }
?>