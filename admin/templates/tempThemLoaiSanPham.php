<table>
<form action="pages/pThemLoaiSanPham.php" method="POST" name="frmThemLoaiSanPham" enctype="multipart/form-data">
    <tr>
        <td>Tên Loại sản phẩm</td>
        <td><input type="text" name="TenLoaiSanPham"></input></td>
    </tr>
    <tr>
        <td>Bị xoá</td>
        <td>
            <select name="BiXoa">
                <option value="0">Không xoá</optin>
                <option value="1">Xoá</optin>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan=2><input type="submit" value="Thêm" name="btnThem"/></td>
    </tr>
</form>
</table>