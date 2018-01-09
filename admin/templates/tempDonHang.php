<tr>
    <td><?php echo $row["MaDonDatHang"];?></td>
    <td><?php echo $row["NgayLap"];?></td>
    <td><?php echo $row["TongThanhTien"];?></td>
    <td><?php echo $row["MaTaiKhoan"];?></td>
    <td><select name="MaTinhTrang">
        <option value="1" <?php if($row['MaTinhTrang']==1) echo "selected";?> >Đã đặt hàng</option>
        <option value="2" <?php if($row['MaTinhTrang']==2) echo "selected";?>>Đang giao hàng</option>
        <option value="3" <?php if($row['MaTinhTrang']==3) echo "selected";?>>Giao hàng thành công</option>
    </select></td>
    <td><a href="pages/pXoaDonHang.php?MaDonDatHang=<?php echo $row['MaDonDatHang']?>">Xoa</a>/<a href="index.php?key=donhangSua&MaDonDatHang=<?php echo $row["MaDonDatHang"];?>">Sua</a></td>
</tr>