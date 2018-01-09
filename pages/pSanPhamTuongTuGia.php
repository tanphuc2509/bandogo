<div class="content_SanPhamTuongTu" style="min-width: 650px;float: left;">
    <h3>Sản phẩm liên quan - tương tự giá</h3>
    <?php 
        $MaSanPham = $row['MaSanPham'];
        $MaLoaiSanPham = $row["MaLoaiSanPham"];
        $GiaSanPham = $row["GiaSanPham"];
        $sl = "SELECT SanPham.TenSanPham, SanPham.HinhURL, SanPham.GiaSanPham, SanPham.MaSanPham
               FROM SanPham
               WHERE SanPham.MaLoaiSanPham = $MaLoaiSanPham
                 AND SanPham.GiaSanPham > $GiaSanPham * 0.9
                 AND SanPham.GiaSanPham < $GiaSanPham * 1.2
                 AND SanPham.MaSanPham != $idSP
                 AND SanPham.BiXoa = 0
               ORDER BY SanPham.GiaSanPham DESC
               LIMIT 0,4";
        $qr = DataProvider::execQuery($sl);
        while($row = mysqli_fetch_assoc($qr))
        {
            include('templates/tempChiTietSanPhamTuongTuGia.php');
        }
    ?>
</div>