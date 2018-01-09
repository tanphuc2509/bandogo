<?php
    session_start();
    include_once('lib/DataProvider.php');
    include_once('lib/GioHang.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Xưởng Mộc Vân Khoa</title>
    <link type="text/css" href="css/Style.css" rel="stylesheet" />
        <script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div id="container">
	<?php include("modules/mHeader.php"); ?>
    <?php include("modules/mThanhTimKiem.php");?>
	<?php include("modules/mMenuNgang.php");?>
    
    <div id="content">
    	<?php include("modules/mMenuDoc.php") ?>
                     
    	<?php include("modules/mContent.php"); ?>
    </div>
    
    <?php include("modules/mFooter.php") ?>
</div>
</body>
</html>