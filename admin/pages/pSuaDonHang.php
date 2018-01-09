<?php 
    include("../../lib/DataProvider.php");
    if(isset($_POST['btnSua']))
    {
        $TongThanhTien = $_POST["TongThanhTien"];
        $NgayLap = $_POST["NgayLap"];
        $MaTinhTrang = $_POST["MaTinhTrang"];
        $MaDonDatHang = $_POST["MaDonDatHang"];
        $sql = "UPDATE DonDatHang
                SET TongThanhTien = '$TongThanhTien', NgayLap = '$NgayLap'
                WHERE MaDonDatHang = $MaDonDatHang";
        if(DataProvider::execQuery($sql))
        {
            DataProvider::ChangeURL("../index.php?key=donhang");
        }
        else
            echo "Lỗi cập nhật";
    }
?>