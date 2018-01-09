<div id="quanlygiohang">
    <h1>Quản lý giỏ hàng</h1>
    <table>
        <tr>
            <td>STT</td>
            <td>Tên sản phẩm</td>
            <td>Hình</td>
            <td>Giá</td>
            <td>Số lượng</td>
            <td>Thao tác</td>
        </tr>
        <?php
            $TongTien = 0;
            if(isset($_SESSION["GioHang"]))
            {
                $GioHang = unserialize($_SESSION["GioHang"]);
                $i = 1;

                foreach($GioHang->DSSanPham as $sp)
                {
                    $sql = "SELECT TenSanPham, HinhURL, GiaSanPham FROM SanPham WHERE MaSanPham = $sp->MaSanPham";
                    $result = DataProvider::execQuery($sql);
                    $row = mysqli_fetch_array($result);

                    $TenSanPham = $row['TenSanPham'];
                    $MaSanPham = $sp->MaSanPham;
                    $HinhURL = $row['HinhURL'];
                    $GiaSanPham = $row['GiaSanPham'];
                    include("templates/tempGioHang.php");
                    $TongTien += $sp->SoLuong * $GiaSanPham;
                }
            }
        ?>
    </table>
    <div class="price">
        Tổng thành tiền: <?php echo $TongTien; ?> đ
        <?php
            $_SESSION["TongTien"] = $TongTien;
        ?>
    </div>
    <a href="pages/qlGioHang/exDatHang.php">
       <img src="images/datmua.png" width="100px"/>
    </a>
</div>