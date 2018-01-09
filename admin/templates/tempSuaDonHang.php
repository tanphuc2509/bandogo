<?php 
    if(isset($_GET["MaDonDatHang"]))
    {
        $MaDonHang = $_GET["MaDonDatHang"];
        $sql = "SELECT DonDatHang.MaDonDatHang, DonDatHang.TongThanhTien, DonDatHang.MaTaiKhoan, DonDatHang.MaTinhTrang
                FROM DonDatHang
                WHERE MaDonDatHang = $MaDonHang";
        $qr = DataProvider::execQuery($sql);
        $row = mysqli_fetch_array($qr);
?>
<table>
<form action="pages/pSuaDonHang.php" method="POST" name="frmSuaDonDatHang" enctype="multipart/form-data">
    <tr>
        <td>Tổng thành tiền</td>
        <td><input type="text" name="TongThanhTien" value="<?php echo $row['TongThanhTien'];?>"/></td>
    </tr>
    <tr>
        <td>Ngày lập</td>
        <td><input type="date" name="NgayLap"/></td>
    </tr>
    <tr>
        <td>Tình trạng</td>
        <td>
            <select name="MaTinhTrang">
                <option value="1" <?php if($row['MaTinhTrang']==1) echo "selected";?> >Đã đặt hàng</option>
                <option value="2" <?php if($row['MaTinhTrang']==2) echo "selected";?>>Đang giao hàng</option>
            <option value="3" <?php if($row['MaTinhTrang']==3) echo "selected";?>>Giao hàng thành công</option>
            </select>
        </td>
    </tr>
    <input type="hidden" name="MaDonDatHang" value="<?php echo $row['MaDonDatHang'];?>"/>
    <tr>
        <td colspan=2><input type="submit" value="Sửa" name="btnSua"/></td>
    </tr>
    
</form>
</table>
    <?php } 
    ?>