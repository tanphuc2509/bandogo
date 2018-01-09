<tr>
    <td><?php echo $row['MaSanPham'];?></td>
    <td><?php echo $row['TenSanPham'];?></td>
    <td><?php echo $row['HinhURL'];?></td>
    <td><?php echo $row['GiaSanPham'];?></td>
    <td><?php echo $row['NgayNhap'];?></td>
    <td><?php echo $row['SoLuongTon'];?></td>
    <td><?php echo $row['SoLuongBan'];?></td>
    <td><?php echo $row['SoLuocXem'];?></td>
    <td><?php echo $row['MoTa'];?></td>
    <td><?php echo $row['BiXoa'];?></td>
    <td><?php echo $row['TenLoaiSanPham'];?></td>
    <td><?php echo $row['TenHangSanXuat'];?></td>
    <td><a href="pages/pXoaSanPham.php?MaSanPham=<?php echo $row['MaSanPham']; ?>">Xoá</a>/<a href="index.php?key=spSua&MaSanPham=<?php echo $row['MaSanPham'];?>">Sửa</a></td>
</tr>