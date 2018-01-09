<div class="content_ChiTietSanPham">
    <div class="content_ChiTietSanPham_Hinh">
        <img src="images/<?php echo $row['HinhURL'];?>"/>
    </div>
    <div class="content_ChiTietSanPham_ThongTin">
        <h3 class="TenSanPham"><?php echo $row['TenSanPham'];?></h3>
        <p>Thương hiệu: <a href="#" class="NhaSanXuat" style="text-decoration:  none;
    color: #f51010"><?php echo $row['TenHangSanXuat']?></a><p>
        <p>Giá: <?php echo number_format($row['GiaSanPham']);?> đ </p>
        <p>Loại sản phẩm:<a href="#" class="LoaiSanPham"> <?php echo $row['TenLoaiSanPham'];?></a></p>
        <p>Số lượt xem: <?php echo $row['SoLuocXem']; ?> </p>
        <p>Số lượt bán: <?php echo $row['SoLuongBan']; ?> </php>
<?php 
if(isset($_SESSION['MaTaiKhoan']))
{
?>
    <span>
        Đặt hàng:
        <a href="index.php?a=12&id=<?php echo $row["MaSanPham"];?>"><img src="images/giohang.png" width="20px"/></a>
    </span>
<?php 
}
?>
        <hr>
        <p>
            Mô tả sản phẩm: <br/>
            <?php 
                echo $row['MoTa'];
            ?>
        </p>
    </div>
