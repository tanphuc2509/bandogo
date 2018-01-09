<table border="1" width="90%" border="0" cellpadding="5">
  <tr>
    <td>Mã tài khoản</td>
    <td>Tên đăng nhập</td>
    <td>Tên hiển thị</td>
    <td>Địa chỉ</td>
    <td>Điện thoại</td>
    <td>Email</td>
    <td>Bị xoá</td>
    <td>Mã loại tài khoản</td>
    <td><a href="index.php?key=userThem">Thêm</a></td>
  </tr>
  <?php 
  $sql = "SELECT `MaTaiKhoan`,`TenDangNhap`,`TenHienThi`,`DiaChi`,`DienThoai`,`Email`,`BiXoa`,`MaLoaiTaiKhoan` FROM `TaiKhoan` ORDER BY `MaTaiKhoan`";
  $qr = DataProvider::execQuery($sql);
  while($row = mysqli_fetch_array($qr))
  {
    include("templates/tempUser.php");
  }
  ?>
</table>
