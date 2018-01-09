<h3>Các sản phẩm cùng hãng</h3>
<?php
    $id = $_GET['id'];
    $rowPerPage = 6;// Number rows on a page
    $curPage = 1; // present page
    
    if(isset($_GET['page'])) $curPage = $_GET['page']; // neu duong dan co truyen page thi dung tham so page duoc truyen
    $offset = ($curPage - 1)*$rowPerPage; //Tinh offset bat dau load
    //San pham ban chay
    $sql = "SELECT SanPham.TenSanPham, SanPham.MaSanPham, SanPham.HinhURL, SanPham.MoTa, SanPham.GiaSanPham, SanPham.MaHangSanXuat
            FROM SanPham
            WHERE SanPham.MaHangSanXuat = $id
            ORDER BY SanPham.SoLuongBan DESC
            LIMIT $offset,$rowPerPage";
    $qr = DataProvider::execQuery($sql);
    while($row = mysqli_fetch_assoc($qr))
    {
        include("templates/tempThumbProduct.php");
    }
?>