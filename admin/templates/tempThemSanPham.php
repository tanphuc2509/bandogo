<table>
<form action="pages/pThemSanPham.php" method="POST" name="frmThemLoaiSanPham" enctype="multipart/form-data">
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="TenSanPham"></input></td>
    </tr>

    <tr>
        <td>Upload ảnh</td>
        <td><input name="ufile" type="file" /></td>
    </tr>

    <tr>
        <td>Giá sản phẩm</td>
        <td><input name="GiaSanPham" type="text" /></td>
    </tr>

    <tr>
        <td>Ngày nhập</td>
        <td> <input type="date" name="NgayNhap"></td>
    </tr>

    <tr>
        <td>Số lượng tồn</td>
        <td><input name="SoLuongTon" type="text" /></td>
    </tr>

    <tr>
        <td>Số lượng bán</td>
        <td><input name="SoLuongBan" type="text" /></td>
    </tr>

    <tr>
        <td>Số lượt xem</td>
        <td><input name="SoLuocXem" type="text" /></td>
    </tr>

    <tr>
        <td>Mô tả</td>
        <td><input name="MoTa" type="text" /></td>
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
        <td>loại sản phẩm</td>
        <td>
            <select name="MaLoaiSanPham">
                <?php 
                    $sql = "select MaLoaiSanPham, TenLoaiSanPham
                            from LoaiSanPham";
                    $qr = DataProvider::execQuery($sql);
                    while($row = mysqli_fetch_array($qr))
                    {?>
                        <option value="<?php echo $row['MaLoaiSanPham'];?>"><?php echo $row['TenLoaiSanPham'];?></optin>
                    <?php 
                    }?>
            </select>
        </td>
    </tr>
    
    <tr>
        <td>Hãng sản xuất</td>
        <td>
            <select name="MaHangSanXuat">
                <?php 
                    $sql = "SELECT MaHangSanXuat, TenHangSanXuat
                            FROM HangSanXuat";
                    $qr = DataProvider::execQuery($sql);
                    while($row = mysqli_fetch_array($qr))
                    {?>
                        <option value="<?php echo $row['MaHangSanXuat'];?>"><?php echo $row['TenHangSanXuat'];?></optin>
                    <?php 
                    }?>
            </select>
        </td>
    </tr>

    <tr>
        <td colspan=2><input type="submit" value="Thêm" name="btnThem"/></td>
    </tr>
</form>
</table>