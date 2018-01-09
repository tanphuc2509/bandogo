<table>
<form action="pages/pThemUser.php" method="POST" name="frmThemUser" enctype="multipart/form-data">
    <tr>
        <td>Tên đăng nhập</td>
        <td><input type="text" name="TenDangNhap"/></td>
    </tr>
    <tr>
        <td>Mật Khẩu</td>
        <td><input type="password" name="MatKhau"/></td>
    </tr>
    <tr>
        <td>Tên hiển thị</td>
        <td><input type="text" name="TenHienThi"/></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td>
            <select name="DiaChi">
                <option value="Đồng Nai">Đồng Nai</option>
                <option value="An Giang">An Giang</option>
                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                <option value="Bạc Liêu">Bạc Liêu</option>
                <option value="Bắc Kạn">Bắc Kạn</option>
                <option value="Bắc Giang">Bắc Giang</option>
                <option value="Bắc Ninh">Bắc Ninh</option>
                <option value="Bến Tre">Bến Tre</option>
                <option value="Bình Dương">Bình Dương</option>
                <option value="Bình Định">Bình Định</option>
                <option value="Bình Phước">Bình Phước</option>
                <option value="Bình Thuận">Bình Thuận</option>
                <option value="Cà Mau">Cà Mau</option>
                <option value="Cao Bằng">Cao Bằng</option>
                <option value="Cần Thơ">Cần Thơ</option>
                <option value="Đồng Nai">Đồng Nai</option>
                <option value="Đắk Lắk">Đắk Lắk</option>
                <option value="Đắk Nông">Đắk Nông</option>
                <option value="Đồng Nai">Đồng Nai</option>
                <option value="Đồng Tháp">Đồng Tháp</option>
                <option value="Điện Biên">Điện Biên</option>
                <option value="Gia Lai">Gia Lai</option>
                <option value="Hà Giang">Hà Giang</option>
                <option value="Hà Nam">Hà Nam</option>
                <option value="Hà Nội">Hà Nội</option>
                <option value="Hà Tĩnh">Hà Tĩnh</option>
                <option value="Hải Dương">Hải Dương</option>
                <option value="Hải Phòng">Hải Phòng</option>
                <option value="Hòa Bình">Hòa Bình</option>
                <option value="Hậu Giang">Hậu Giang</option>
                <option value="Hưng Yên">Hưng Yên</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Điện thoại</td>
        <td><input type="text" name="DienThoai"/></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="Email"/></td>
    </tr>
        <td>Bị xoá</td>
        <td>
            <select name="BiXoa">
                <option value="0">Không xoá</optin>
                <option value="1">Xoá</optin>
            </select>
        </td>
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
        <td colspan=2><input type="submit" value="Thêm" name="btnThem"/></td>
    </tr>
</form>
</table>