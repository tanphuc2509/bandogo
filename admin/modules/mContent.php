<?php
    if(isset($_GET['key']))
    {
        switch($_GET['key'])
        {
            //Hang san xuat
            case "hsx" : include("pages/pHangSanXuat.php"); break;
            case "hsxThem" : include("templates/tempThemHangSanXuat.php"); break;
            case "hsxSua" : include("templates/tempSuaHangSanXuat.php"); break;

            //Loai San PHam
            case "lsp" : include("pages/pLoaiSanPham.php"); break;
            case "lspThem" : include("templates/tempThemLoaiSanPham.php"); break;
            case "lspSua" : include("templates/tempSuaLoaiSanPham.php"); break;

            //San pham
            case "sp" : include("pages/pSanPham.php"); break;
            case "spThem" : include("templates/tempThemSanPham.php"); break;
            case "spSua" : include("templates/tempSuaSanPham.php"); break;

            //user
            case "user" : include("pages/pUser.php"); break;
            case "userThem" : include("templates/tempThemUser.php"); break;
            case "userSua" : include("templates/tempSuaUser.php"); break;

            //Don hang
            case "donhang" : include("pages/pDonHang.php"); break;
            case "donhangSua" : include("templates/tempSuaDonHang.php"); break;
        }
    }
    else include("templates/tempGioiThieu.php");
?>