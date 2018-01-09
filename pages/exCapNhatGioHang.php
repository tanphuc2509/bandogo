<?php
    if(isset($_POST["txtSL"]) && isset($_POST["hdMaSanPham"]))
    {
        $SoLuong = $_POST["txtSL"];
        $MaSanPham = $_POST["hdMaSanPham"];

        if(is_numeric($sl)) {
            $GioHang = unserialize($_SESSION["GioHang"]);
            if ($sl == 0)
                $GioHang->delete($MaSanPham);
            else
                if($SoLuong > 0)
                    $GioHang->update($MaSanPham, $SoLuong);
            $_SESSION["GioHang"] = serialize($GioHang);
        }
    }
    DataProvider::ChangeURL('index.php?a=6');
?>