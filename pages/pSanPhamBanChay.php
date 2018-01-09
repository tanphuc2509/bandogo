<h3>Sản phẩm bán chạy</h3>
<?php 
    //San pham ban chay
    $sql = "SELECT SanPham.TenSanPham, SanPham.MaSanPham, SanPham.HinhURL, SanPham.MoTa, SanPham.GiaSanPham
            FROM SanPham
            ORDER BY SanPham.SoLuongBan DESC
            LIMIT 0,10";
    $qr = DataProvider::execQuery($sql);
    while($row = mysqli_fetch_assoc($qr))
    {
        include("templates/tempThumbProduct.php");
    }
?>