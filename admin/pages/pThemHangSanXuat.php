<?php 
include("../../lib/DataProvider.php");
if(isset($_POST['btnThem']))
{
	if(isset($_FILES['ufile']))
	{
		$target="../../images/";
		$filename=basename($_FILES['ufile']['name']);
		$target.=$filename;
        $logoURL=$filename;
        $TenHangSanXuat = $_POST["TenHangSanXuat"];
        $BiXoa = $_POST["BiXoa"];
		if(move_uploaded_file($_FILES['ufile']['tmp_name'],$target))
		{
            $sql = "INSERT INTO HangSanXuat VALUES(NULL,'$TenHangSanXuat','$logoURL',$BiXoa)";
            if(DataProvider::execQuery($sql))
            {
                DataProvider::ChangeURL("../index.php?key=hsx");
            } 

		}
		else echo "Up file that bai!";
	}
}
?>
