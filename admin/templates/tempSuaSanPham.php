<?php 
    if(isset($_GET["MaSanPham"]))
    {
        $MaSanPham = $_GET["MaSanPham"];
        $sql = "SELECT MaSanPham , TenSanPham , HinhURL , GiaSanPham , NgayNhap , SoLuongTon, SoLuongBan , SoLuocXem , MoTa , BiXoa , MaLoaiSanPham , MaHangSanXuat
                FROM sanpham
                WHERE MaSanPham = $MaSanPham";
        $qr = DataProvider::execQuery($sql);
        $row = mysqli_fetch_array($qr);
?>
<table>
<form action="pages/pSuaSanPham.php" method="POST" name="frmSuaSanPham" enctype="multipart/form-data">
    <tr>
        <td>Tên Sản Phẩm</td>
        <td><input type="text" name="TenSanPham" value="<?php echo $row['TenSanPham'];?>"/></td>
    </tr>
    <tr>
        <td>URL ảnh cũ: <?php echo $row["HinhURL"];?></td>
        <td>Upload ảnh mới: <input name="ufile" type="file" /></td>
    </tr>

    <tr>
        <td>Giá Sản Phẩm</td>
        <td><input type="text" name="GiaSanPham" value="<?php echo $row['GiaSanPham'];?>"/></td>
    </tr>
    <tr>
        <td>Ngày Nhập</td>
        <td><input type="date" name="NgayNhap" value="<?php echo $row['NgayNhap'];?>"/></td>
    </tr>
    
    <tr>
        <td>Số Lượng Tồn</td>
        <td><input type="text" name="SoLuongTon" value="<?php echo $row['SoLuongTon'];?>"/></td>
    </tr>
    <tr>
        <td>Số Lượng Bán</td>
        <td><input type="text" name="SoLuongBan" value="<?php echo $row['SoLuongBan'];?>"/></td>
    </tr>
    <tr>
        <td>Số Lượt xem</td>
        <td><input type="text" name="SoLuocXem" value="<?php echo $row['SoLuocXem'];?>"/></td>
    </tr>
    <tr>
        <td>Mô tả</td>
        <td><input type="text" name="MoTa" value="<?php echo $row['MoTa'];?>"/></td>
    </tr>
    <tr>
        <td>Bị xoá</td>
        <td>
            <select name="BiXoa">
                <option value="0" <?php if($row['BiXoa'] == 0) echo " selected";?> >Không xoá</optin>
                <option value="1" <?php if($row['BiXoa'] == 1) echo " selected";?> >Xoá</optin>
            </select>
        </td>
    </tr>
    <tr>
        <td>Mã Loại Sản Phẩm</td>
        <td><input type="text" name="MaLoaiSanPham" value="<?php echo $row['MaLoaiSanPham'];?>"/></td>
    </tr>
    <tr>
        <td>Mã Hãng Sản Xuất</td>
        <td><input type="text" name="MaHangSanXuat" value="<?php echo $row['MaHangSanXuat'];?>"/></td>
    </tr>
    <tr>
        <td colspan=2><input type="submit" value="Sửa" name="btnSua"/></td>
    </tr>
    <input type="hidden" name="MaSanPham" value="<?php echo $row["MaSanPham"];?>"/>
</form>
</table>
    <?php } 
    ?>