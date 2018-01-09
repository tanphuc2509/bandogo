
<table border="1" width="90%" border="0" cellpadding="5">
  <tr>
    <td>Mã sản phẩm</td>
    <td>Tên Sản Phẩm</td>
    <td>Hình URL</td>
    <td>Giá sản phẩm</td>
    <td>Ngày nhập</td>
    <td>Số lượng tồn</td>
    <td>Số lượng bán</td>
    <td>Số lược xem</td>
    <td>Mô tả</td>
    <td>Bị xoá</td>
    <td>Tên Loại sản phẩm</td>
    <td>Tên hãng sản xuất</td>
    <td><a href="index.php?key=spThem">Thêm</a></td>
  </tr>
  <?php 
  $sql = "SELECT sp.MaSanPham, sp.TenSanPham, sp.HinhURL, sp.GiaSanPham, sp.NgayNhap, sp.SoLuongTon, sp.SoLuongBan, sp.SoLuocXem, sp.MoTa, sp.BiXoa, sp.MaLoaiSanPham, sp.MaHangSanXuat, hsx.TenHangSanXuat, lsp.TenLoaiSanPham FROM SanPham sp, HangSanXuat hsx, LoaiSanPham lsp WHERE sp.MaLoaiSanPham = lsp.MaLoaiSanPham and sp.MaHangSanXuat = hsx.MaHangSanXuat ORDER BY sp.MaSanPham";
  $qr = DataProvider::execQuery($sql);
  while($row = mysqli_fetch_array($qr))
  {
    include("templates/tempSanPham.php");
  }
  ?>
</table>

