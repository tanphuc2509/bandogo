<?php 
include("../../lib/DataProvider.php");
if(isset($_POST['btnThem']))
{
  $TenDangNhap = $_POST["TenDangNhap"];
  $sql = "select MaTaiKhoan from TaiKhoan where TenDangNhap = '$TenDangNhap'";
  $qr = DataProvider::execQuery($sql);
  if(mysqli_num_rows($qr) > 0)
  {
      echo "Trùng tên đăng nhập";
  }
  else
  {
    $MatKhau = $_POST["MatKhau"];
    $TenHienThi = $_POST["TenHienThi"];
    $DiaChi = $_POST["DiaChi"];
    $DienThoai = $_POST["DienThoai"];
    $Email = $_POST["Email"];
    $BiXoa = $_POST["BiXoa"];
    $MaLoaiTaiKhoan = $_POST["MaLoaiTaiKhoan"];

    $sql = "INSERT INTO taikhoan VALUES(NULL,'$TenDangNhap','$MatKhau' ,'$TenHienThi', '$DiaChi', '$DienThoai', '$Email',$BiXoa,$MaLoaiTaiKhoan)";
    if(DataProvider::execQuery($sql))
    {
      DataProvider::ChangeURL("../index.php?key=user");
    } 
  }
}
?>
