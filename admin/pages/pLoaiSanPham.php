
<table border="1" width="90%" border="0" cellpadding="5">
  <tr>
    <td>Mã Loại Sản Phẩm</td>
    <td>Tên Loại Sản Phẩm</td>
    <td>Bị Xoá</td>
    <td><a href="index.php?key=lspThem">Thêm</a></td>
  </tr>
  <?php 
  $sql = "SELECT LoaiSanPham.MaLoaiSanPham, LoaiSanPham.TenLoaiSanPham, LoaiSanPham.BiXoa
          FROM LoaiSanPham";
  $qr = DataProvider::execQuery($sql);
  while($row = mysqli_fetch_array($qr))
  {
    include("templates/tempLoaiSanPham.php");
  }
  ?>
</table>
