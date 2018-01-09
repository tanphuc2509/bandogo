<?php 
    if(isset($_GET["MaHangSanXuat"]))
    {
        $MaHangSanXuat = $_GET["MaHangSanXuat"];
        $sql = "SELECT HangSanXuat.TenHangSanXuat, HangSanXuat.LogoURL, HangSanXuat.BiXoa, HangSanXuat.MaHangSanXuat
                FROM HangSanXuat
                WHERE MaHangSanXuat = $MaHangSanXuat";
        $qr = DataProvider::execQuery($sql);
        $row = mysqli_fetch_array($qr);
?>
<table>
<form action="pages/pSuaHangSanXuat.php" method="POST" name="frmSuahangSanXuat" enctype="multipart/form-data">
    <tr>
        <td>Tên hãng sản xuất</td>
        <td><input type="text" name="TenHangSanXuat" value="<?php echo $row['TenHangSanXuat'];?>"/></td>
    </tr>
    <tr>
        <td>URL ảnh cũ: <?php echo $row["LogoURL"];?></td>
        <td>Upload ảnh mới: <input name="ufile" type="file" /></td>
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
    <input type="hidden" name="MaHangSanXuat" value="<?php echo $row["MaHangSanXuat"];?>"/>
</form>
</table>
    <?php } 
    ?>