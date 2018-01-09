<?php
    if(isset($_GET['id']))
    {
        $MaSanPham = $_GET['id'];
        $GioHang = new GioHang();
        if(isset($_SESSION['GioHang']))
            $GioHang = unserialize($_SESSION['GioHang']);
        $GioHang->ThemSanPham($MaSanPham);
        $_SESSION['GioHang'] = serialize($GioHang);

        DataProvider::ChangeURL('index.php?a=6');
    }
    else
    {
        DataProvider::ChangeURL('index.php?a=0&id=3');
    }

?>