<?php
if(isset($_POST["txttensp"]))
{
	$txttensp = $_POST["txttensp"];
	$sql = "SELECT SanPham.TenSanPham, SanPham.MaSanPham, SanPham.HinhURL, SanPham.MoTa, SanPham.GiaSanPham, 				SanPham.MaHangSanXuat
            FROM SanPham
            WHERE SanPham.TenSanPham LIKE '%$txttensp%'
       ";
	  $qr = DataProvider::execQuery($sql);
	  while($row = mysqli_fetch_assoc($qr))
    {
        include("templates/tempThumbProduct.php");
	}	
}
?>