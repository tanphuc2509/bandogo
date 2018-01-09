<?php 
include("../../lib/DataProvider.php");
if(isset($_POST['btnThem']))
{
	if(isset($_FILES['ufile']))
	{
		$target="../dataupload/images/";
		$filename=basename($_FILES['ufile']['name']);
		$target.=$filename;
        $HinhURL="../dataupload/images/".$filename;
        $TenSanPham = $_POST["TenSanPham"];
        $GiaSanPham = $_POST["GiaSanPham"];
        $NgayNhap = $_POST["NgayNhap"];
        $SoLuongTon = $_POST["SoLuongTon"];
        $SoLuongBan = $_POST["SoLuongBan"];
        $SoLuocXem = $_POST["SoLuocXem"];
        $MoTa = $_POST["MoTa"];
        $BiXoa = $_POST["BiXoa"];
        $MaLoaiSanPham = $_POST["MaLoaiSanPham"];
        $MaHangSanXuat = $_POST["MaHangSanXuat"];
        
		if(move_uploaded_file($_FILES['ufile']['tmp_name'],$target))
		{
            $sql = "INSERT INTO sanpham VALUES(NULL,'$TenSanPham','$HinhURL',$GiaSanPham,'$NgayNhap',$SoLuongTon,$SoLuongBan,$SoLuocXem,'$MoTa',$BiXoa,$MaLoaiSanPham,$MaHangSanXuat)";
            if(DataProvider::execQuery($sql))
            {
                DataProvider::ChangeURL("../index.php?key=sp");
            } 

		}
        else echo "Up file that bai!";
    }
    
}
?>
