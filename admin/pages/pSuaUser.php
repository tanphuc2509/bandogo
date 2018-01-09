<?php 
    include("../../lib/DataProvider.php");
    if(isset($_POST['btnSua']))
    {
        
        $TenDangNhap = $_POST["TenDangNhap"];
        $MatKhau = $_POST["MatKhau"];
        $TenHienThi = $_POST["TenHienThi"];
        $DiaChi = $_POST["DiaChi"];
        $DienThoai = $_POST["DienThoai"];
        $Email = $_POST["Email"];
        $BiXoa = $_POST["BiXoa"];
        $MaLoaiTaiKhoan = $_POST["MaLoaiTaiKhoan"];  
        $MaTaiKhoan = $_POST["MaTaiKhoan"];   
        $sql = "UPDATE taikhoan
                SET TenDangNhap = '$TenDangNhap', MatKhau = '$MatKhau' , TenHienThi = '$TenHienThi', DiaChi = '$DiaChi' , DienThoai = '$DienThoai', Email = '$Email' , BiXoa = $BiXoa , MaLoaiTaiKhoan = '$MaLoaiTaiKhoan'
                WHERE MaTaiKhoan = $MaTaiKhoan";
        if(DataProvider::execQuery($sql))
        {
            DataProvider::ChangeURL("../index.php?key=user");
        } 
    }
?>