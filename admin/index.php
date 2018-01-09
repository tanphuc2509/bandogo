<?php
    //khởi tại session
    session_start(); 
    //khai báo để nhảy trang đuược(áp dụng cho hàng header)
    ob_start();

    include_once('../lib/DataProvider.php');  
    
    if(!isset($_SESSION['MaTaiKhoan'])) 
        header("location:../index.php");
    else if($_SESSION['MaLoaiTaiKhoan'] == 1)
        header("location:../index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản Trị Viên</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div id="container">
    
    <!--menu-->
    <?php include("modules/mHeader.php"); ?>
    <!--//menu-->
	<?php include("modules/mWrapper.php"); ?>
	 <!--footer-->
    <?php include("modules/mFooter.php"); ?>
</div>
</body>
</html>
