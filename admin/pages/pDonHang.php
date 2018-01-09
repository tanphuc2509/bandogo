<table border="1" width="90%" border="0" cellpadding="5">
  <tr>
    <td>Mã đơn đặt hàng</td>
    <td>Ngày lập</td>
    <td>Tổng Thành tiền</td>
    <td>Mã Tài khoản</td>
    <td>Tình trạng</td>
    <td></td>
  </tr>
  <?php 
  $sql = "SELECT dh.MaDonDatHang,dh.NgayLap,dh.TongThanhTien,dh.MaTaiKhoan,dh.MaTinhTrang, tt.TenTinhTrang
          FROM dondathang dh, tinhtrang tt
          WHERE dh.MaTinhTrang = tt.MaTinhTrang
          ORDER BY dh.NgayLap";
  $qr = DataProvider::execQuery($sql);
  while($row = mysqli_fetch_array($qr))
  {
    include("templates/tempDonHang.php");
  }
  ?>
</table>
