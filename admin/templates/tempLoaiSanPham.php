<tr>
    <td><?php echo $row['MaLoaiSanPham'];?></td>
    <td><?php echo $row['TenLoaiSanPham'];?></td>
    <td><?php 
        if($row['BiXoa'] == 1) {
            echo "Bị xoá"; }
        else {echo "Không bị xoá";}?></td>
    <td><a href="pages/pXoaLoaiSanPham.php?MaLoaiSanPham=<?php echo $row["MaLoaiSanPham"];?>">Xoá</a>/<a href="index.php?key=lspSua&MaLoaiSanPham=<?php echo $row["MaLoaiSanPham"];?>">Sửa</a></td>
</tr>