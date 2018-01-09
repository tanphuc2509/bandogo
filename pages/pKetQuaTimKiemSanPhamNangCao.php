<?php
if(isset($_POST["TenSanPham"]))
{
    $TenSanPham = $_POST["TenSanPham"];
    $MaHangSanXuat = $_POST["MaHangSanXuat"];
    $MaLoaiSanPham = $_POST["MaLoaiSanPham"];
	$sql = "SELECT SanPham.TenSanPham, SanPham.MaSanPham, SanPham.HinhURL, SanPham.MoTa, SanPham.GiaSanPham, 				SanPham.MaHangSanXuat
            FROM SanPham
            WHERE SanPham.TenSanPham LIKE '%$TenSanPham%'
                and SanPham.MaHangSanXuat = $MaHangSanXuat
                and SanPham.MaLoaiSanPham = $MaLoaiSanPham";
	  $qr = DataProvider::execQuery($sql);
	  while($row = mysqli_fetch_assoc($qr))
    {
        include("templates/tempThumbProduct.php");
	}	
}
?>