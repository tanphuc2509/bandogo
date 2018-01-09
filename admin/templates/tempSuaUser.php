<?php 
    if(isset($_GET["MaTaiKhoan"]))
    {
        $MaTaiKhoan = $_GET["MaTaiKhoan"];
        $sql = "SELECT MaTaiKhoan, TenDangNhap, MatKhau , TenHienThi , DiaChi , DienThoai , Email , BiXoa , MaLoaiTaiKhoan
                FROM taikhoan
                WHERE MaTaiKhoan = $MaTaiKhoan";
        $qr = DataProvider::execQuery($sql);
        $row = mysqli_fetch_array($qr);
?>
<table>
<form action="pages/pSuaUser.php" method="POST" name="frmSuaUser" enctype="multipart/form-data">
    <tr>
        <td>Tên đăng nhập</td>
        <td><input type="text" name="TenDangNhap" value="<?php echo $row['TenDangNhap'];?>"/></td>
    </tr>
    <tr>
        <td>Mật Khẩu mới</td>
        <td><input type="password" name="MatKhau" value="<?php echo $row['MatKhau'];?>"/></td>
    </tr>
    <tr>
        <td>Tên hiển thị</td>
        <td><input type="text" name="TenHienThi" value="<?php echo $row['TenHienThi'];?>"/></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><input type="text" name="DiaChi" value="<?php echo $row['DiaChi'];?>"/></td>
    </tr>
    <tr>
        <td>Điện thoại</td>
        <td><input type="text" name="DienThoai" value="<?php echo $row['DienThoai'];?>"/></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="Email" value="<?php echo $row['Email'];?>"/></td>
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
    <td>Loại tài khoản</td>
        <td>
            <select name="MaLoaiTaiKhoan">
                <option value="1">Nhân viên</optin>
                <option value="2">Người dùng</optin>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan=2><input type="submit" value="Sửa" name="btnSua"/></td>
    </tr>
    <input type="hidden" name="MaTaiKhoan" value="<?php echo $row["MaTaiKhoan"];?>"/>
</form>
</table>
    <?php } 
    ?>