<?php 
    if(isset($_GET["MaLoaiSanPham"]))
    {
        $MaLoaiSanPham = $_GET["MaLoaiSanPham"];
        $sql = "SELECT LoaiSanPham.TenLoaiSanPham, LoaiSanPham.BiXoa
                FROM LoaiSanPham
                WHERE MaLoaiSanPham = $MaLoaiSanPham";
        $qr = DataProvider::execQuery($sql);
        $row = mysqli_fetch_array($qr);
?>
<table>
<form action="pages/pSuaLoaiSanPham.php" method="POST" name="frmSuaLoaiSanPham">
    <tr>
        <td>Tên loại sản phẩm</td>
        <td><input type="text" name="TenLoaiSanPham" value="<?php echo $row['TenLoaiSanPham'];?>"/></td>
    </tr>
        <td>Bị xoá</td>
        <td>
            <select name="BiXoa">
                <option value="0" <?php if($row['BiXoa'] == 0) echo " selected";?> >Không xoá</optin>
                <option value="1" <?php if($row['BiXoa'] == 1) echo " selected";?> >Xoá</optin>
            </select>
        </td>
    <tr>
        <td colspan=2><input type="submit" value="Sửa" name="btnSua"/></td>
    </tr>
    <input type="hidden" name="MaLoaiSanPham" value="<?php echo $MaLoaiSanPham;?>"/>
</form>
</table>
    <?php } 
?>