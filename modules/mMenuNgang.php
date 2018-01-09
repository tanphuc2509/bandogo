<div id="menu_Ngang">
    <div class="menu_Ngang_ChiTiet"><span><b><a href="index.php">TRANG CHỦ</a></b></span></div>
<?php 
    $sql = "select LoaiSanPham.MaLoaiSanPham, LoaiSanPham.TenLoaiSanPham
            from LoaiSanPham";
    $qr = DataProvider::execQuery($sql);
    while($row = mysqli_fetch_assoc($qr))
    {
        include("templates/tempMenuNgang.php");
    } 
    ?>
</div>