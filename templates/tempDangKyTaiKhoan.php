<form id="frmDangKyTaiKhoan" method="POST" action="index.php?a=9">
    <span>Thông tin cá nhân</span><br/>
    <label><b>Họ tên của bạn<b></label>
        <input type="text" placeholder="Nhập họ tên" name="txtHoTen">
    <br/>
    <label><b>Ngày sinh<b></label>
        <input type="date" name="dateNgaySinh">
    <br/>
    <label><b>Thành phố<b></label>
        <select name="slThanhPho">
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
    <br/>
    <span>Thông tin tài khoản</span><br/>
    <label><b>Tên đăng nhập<b></label>
        <input type="text" placeholder="Nhập tên đăng nhập" name="txtTenDangNhap">
    <br/>
    <label><b>Mật khẩu<b></label>
        <input type="password" placeholder="**********" name="pwdMatKhau">
    <br/>
    <label><b>Xác nhận lại mật khẩu<b></label>
        <input type="password" placeholder="**********" name="pwdNhapLaiMatKhau">
    <br/>
    <label><b>Email<b></label>
        <input type="text" placeholder="Nhập email" name="txtEmail">
    <br/>
    <label><b>Số điện thoại<b></label>
        <input type="text" placeholder="Nhập số điện thoại" name="txtSoDienThoai">
    <br/>
    <label><b>Mã kiểm tra<b></label>
    <div class="g-recaptcha" data-sitekey="6LflJD8UAAAAALgGqqHtBX2btHWeOjZY-RveotQt"></div>
    <input type="submit" value="Đăng ký" name="dangky">
</form>