<h3>Sản phẩm mới nhất</h3>
<?php     
    $sql = "SELECT SanPham.TenSanPham, SanPham.MaSanPham, SanPham.HinhURL, SanPham.MoTa, SanPham.GiaSanPham, SanPham.NgayNhap
            FROM SanPham
            ORDER BY SanPham.NgayNhap DESC
            LIMIT 0,10";
    $qr = DataProvider::execQuery($sql);
    while($row = mysqli_fetch_assoc($qr))
    {
        include("templates/tempThumbProduct.php");
    }
?>