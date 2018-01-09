<?php 
include("../../lib/DataProvider.php");
if(isset($_POST['btnThem']))
{
    $TenLoaiSanPham = $_POST["TenLoaiSanPham"];
    $BiXoa = $_POST["BiXoa"];
    $sql = "INSERT INTO LoaiSanPham VALUES(NULL,'$TenLoaiSanPham',$BiXoa)";
    if(DataProvider::execQuery($sql))
    {
        DataProvider::ChangeURL("../index.php?key=lsp");
    } 
}
?>
