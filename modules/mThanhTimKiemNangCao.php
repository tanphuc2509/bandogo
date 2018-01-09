<div id="Content_ThanhTimKiemNangCao" >
    <form action="index.php?a=5.5" method="POST" style="float:none" name="frmSearch">
        <input type="text" name="TenSanPham" style="background-color:#0FF" />
        <select name="MaLoaiSanPham">
            <?php 
                $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham
                        FROM LoaiSanPham";
                $qr = DataProvider::execQuery($sql);
                while($row=mysqli_fetch_array($qr))
                {
            ?>
            <option value="<?php echo $row['MaLoaiSanPham'];?>"><?php echo $row['TenLoaiSanPham'];?></option>
                <?php } ?>
        </select>
        <select name="MaHangSanXuat">
        <?php 
                $sql = "SELECT MaHangSanXuat, TenHangSanXuat
                        FROM HangSanXuat";
                $qr = DataProvider::execQuery($sql);
                while($row=mysqli_fetch_array($qr))
                {
            ?>
            <option value="<?php echo $row['MaHangSanXuat'];?>"><?php echo $row['TenHangSanXuat'];?></option>
                <?php } ?>
        </select>
        <input name="submit" type="submit" value="Tìm kiếm nâng cao" style="color:#03F"  />
    </form> 
</div>