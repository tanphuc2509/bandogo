<?php
    if(isset($_POST["userName"]) && isset($_POST["password"]))
    {
        $userName = $_POST["userName"];
        $password = $_POST["password"];

        $sql = "SELECT MaTaiKhoan, TenHienThi, MaLoaiTaiKhoan
                FROM TaiKhoan
                WHERE BiXoa = 0 AND TenDangNhap = '$userName'
                                AND MatKhau = '$password'";

        $result = DataProvider::execQuery($sql);
        $row = mysqli_fetch_array($result);
        if($row != null)
        {
            $_SESSION["MaTaiKhoan"] = $row["MaTaiKhoan"];
            $_SESSION["TenHienThi"] = $row["TenHienThi"];
            $_SESSION["MaLoaiTaiKhoan"] = $row["MaLoaiTaiKhoan"];
            
            if($_SESSION["MaLoaiTaiKhoan"] == 2) {
                DataProvider::ChangeURL("admin/index.php");
            }
            else {
                DataProvider::ChangeURL("index.php");
            }
        }
        else
            DataProvider::ChangeURL("index.php?a=0&id=4");
    }
    else
        DataProvider::ChangeURL("index.php?a=0&id=4");

?>