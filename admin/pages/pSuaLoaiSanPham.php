<?php 
    include("../../lib/DataProvider.php");
    if(isset($_POST['btnSua']))
    {
        $TenLoaiSanPham = $_POST["TenLoaiSanPham"];
        $BiXoa = $_POST["BiXoa"];
        $MaLoaiSanPham = $_POST["MaLoaiSanPham"];
       
        $sql = "UPDATE loaisanpham
                SET TenLoaiSanPham = '$TenLoaiSanPham', BiXoa = $BiXoa
                WHERE MaLoaiSanPham = $MaLoaiSanPham";
        if(DataProvider::execQuery($sql))
        {
            DataProvider::ChangeURL("../index.php?key=lsp");
        }
        else
            echo "Lỗi cập nhật";
    }
?>