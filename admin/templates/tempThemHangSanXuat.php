<table>
<form action="pages/pThemHangSanXuat.php" method="POST" name="frmThemhangSanXuat" enctype="multipart/form-data">
    <tr>
        <td>Tên hãng sản xuất</td>
        <td><input type="text" name="TenHangSanXuat"></input></td>
    </tr>
    <tr>
        <td>Upload ảnh</td>
        <td><input name="ufile" type="file" /></td>
    </tr>
        <td>Bị xoá</td>
        <td>
            <select name="BiXoa">
                <option value="0">Không xoá</optin>
                <option value="1">Xoá</optin>
            </select>
        </td>
    <tr>
        <td colspan=2><input type="submit" value="Thêm" name="btnThem"/></td>
    </tr>
</form>
</table>