<tr>
    <td><?php echo $row["MaHangSanXuat"];?></td>
    <td><?php echo $row["TenHangSanXuat"];?></td>
    <td><?php echo $row["LogoURL"];?></td>
    <td><?php echo $row["BiXoa"];?></td>
    <td><a href="pages/pXoaHangSanXuat.php?MaHangSanXuat=<?php echo $row['MaHangSanXuat']?>">Xoa</a>/<a href="index.php?key=hsxSua&MaHangSanXuat=<?php echo $row["MaHangSanXuat"];?>">Sua</a></td>
</tr>