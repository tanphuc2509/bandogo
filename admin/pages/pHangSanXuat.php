
<table border="1" width="90%" border="0" cellpadding="5">
  <tr>
    <td>STT</td>
    <td>Tên Hãng Sản Xuất</td>
    <td>Logo URL</td>
    <td>Bị Xoá</td>
    <td><a href="index.php?key=hsxThem">Thêm</a></td>
  </tr>
  <?php 
  $sql = "SELECT HangSanXuat.MaHangSanXuat, HangSanXuat.TenHangSanXuat, HangSanXuat.LogoURL, HangSanXuat.BiXoa
          FROM HangSanXuat";
  $qr = DataProvider::execQuery($sql);
  while($row = mysqli_fetch_array($qr))
  {
    include("templates/tempHangSanXuat.php");
  }
  ?>
</table>
