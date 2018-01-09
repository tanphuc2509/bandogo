<form name="frmGioHang" action="index.php?a=13" method="post">
    <tr>
        <td>
            <?php echo $i++; ?>
        </td>
        <td>
            <?php echo $TenSanPham; ?>
        </td>
        <td align="center">
            <img src="images/<?php echo $HinhURL; ?>" width="50" />
        </td>
        <td>
            <?php echo $GiaSanPham; ?>
        </td>
        <td>
            <input type="text" name="txtSL" value="<?php echo $sp->SoLuong; ?>" width="45" size="5" />
            <input type="hidden" name="hdMaSanPham" value="<?php echo $sp->MaSanPham; ?>" />
        </td>
        <td>
            <input type="submit" value="Cập nhật số lượng" />
        </td>
    </tr>
</form>
