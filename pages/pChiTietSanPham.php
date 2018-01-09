<?php 
    if(isset($_GET['id']))
    {
        $idSP = $_GET['id'];
        $sql = "
            select sp.MaSanPham, sp.TenSanPham, sp.HinhURL, sp.GiaSanPham,sp.MaLoaiSanPham, sp.SoLuongTon,sp.SoLuocXem,sp.SoLuongBan, sp.MoTa, hsx.TenHangSanXuat, lsp.TenLoaiSanPham
            FROM SanPham sp, HangSanXuat hsx, LoaiSanPham lsp
            where sp.MaHangSanXuat = hsx.MaHangSanXuat
                and lsp.MaLoaiSanPham = sp.MaLoaiSanPham
                and sp.MaSanPham = $idSP
                and sp.BiXoa = 0";
    $result = DataProvider::execQuery($sql);
    $row = mysqli_fetch_assoc($result);
    include("templates/tempChiTietSanPham.php");
    include("pages/pSanPhamTuongTuGia.php");
?>
<?php
    }
    else
        DataProvider::ChangeURL("index.php");
?>
