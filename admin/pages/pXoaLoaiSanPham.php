<?php 
    include("../../lib/DataProvider.php");
    if(isset($_GET["MaLoaiSanPham"]))
    {
        $MaLoaiSanPham = $_GET["MaLoaiSanPham"];
        $sql = "DELETE FROM LoaiSanPham
                WHERE MaLoaiSanPham = $MaLoaiSanPham";
        if(DataProvider::execQuery($sql))
        {
            DataProvider::ChangeURL("../index.php?key=lsp");
        }
        else
            echo "Xoa That bai";
    }
?>