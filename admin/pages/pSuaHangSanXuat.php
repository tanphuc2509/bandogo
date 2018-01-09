<?php 
    include("../../lib/DataProvider.php");
    if(isset($_POST['btnSua']))
    {
        $TenHangSanXuat = $_POST["TenHangSanXuat"];
        $BiXoa = $_POST["BiXoa"];
        $MaHangSanXuat = $_POST["MaHangSanXuat"];
        if(isset($_FILES['ufile']))
	    {
            $target="../../images/";
            $filename=basename($_FILES['ufile']['name']);
            if($filename == NULL)
            {
                $sql = "UPDATE HangSanXuat
                        SET TenHangSanXuat = '$TenHangSanXuat', BiXoa = $BiXoa
                        WHERE MaHangSanXuat = $MaHangSanXuat";
                if(DataProvider::execQuery($sql))
                {
                    DataProvider::ChangeURL("../index.php?key=hsx");
                } 
            }
            else
            {
                $target.=$filename;
                $logoURL=$filename;
                if(move_uploaded_file($_FILES['ufile']['tmp_name'],$target))
                {
                    $sql = "UPDATE HangSanXuat
                        SET TenHangSanXuat = '$TenHangSanXuat', BiXoa = $BiXoa, LogoURL = '$logoURL'
                        WHERE MaHangSanXuat = $MaHangSanXuat";
                    if(DataProvider::execQuery($sql))
                    {
                        DataProvider::ChangeURL("../index.php?key=hsx");
                    } 

                }
                else echo "Up file that bai!";
            }
        }
    }
?>