<?php 
    include("../../lib/DataProvider.php");
    if(isset($_POST['btnSua']))
    {
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
        $MaSanPham = $_POST["MaSanPham"];
        if(isset($_FILES['ufile']))
	    {
            $target="../../images/";
            $filename=basename($_FILES['ufile']['name']);
            if($filename == NULL)
            {
                $sql = "UPDATE sanpham
                        SET TenSanPham = '$TenSanPham'  , GiaSanPham = $GiaSanPham, NgayNhap = '$NgayNhap', SoLuongTon = $SoLuongTon, SoLuongBan = $SoLuongBan, SoLuocXem = $SoLuocXem, Mota = '$MoTa' , BiXoa = $BiXoa , MaLoaiSanPham = $MaLoaiSanPham , MaHangSanXuat = $MaHangSanXuat
                        WHERE MaSanPham = $MaSanPham";
                if(DataProvider::execQuery($sql))
                {
                    DataProvider::ChangeURL("../index.php?key=sp");
                } 
            }
            else
            {
                $target.=$filename;
                $logoURL=$filename;
                if(move_uploaded_file($_FILES['ufile']['tmp_name'],$target))
                {
                    $sql = "UPDATE sanpham
                        SET TenSanPham = '$TenSanPham' , HinhURL = '$logoURL' , GiaSanPham = '$GiaSanPham', NgayNhap = '$NgayNhap', SoLuongTon = $SoLuongTon, SoLuongBan = $SoLuongBan, SoLuocXem = $SoLuocXem, Mota = '$MoTa' , BiXoa = $BiXoa , MaLoaiSanPham = $MaLoaiSanPham , MaHangSanXuat = $MaHangSanXuat
                        WHERE MaSanPham = $MaSanPham";
                if(DataProvider::execQuery($sql))
                    {
                        DataProvider::ChangeURL("../index.php?key=sp");
                    } 

                }
                else echo "Up file that bai!";
            }
        }
    }
?>