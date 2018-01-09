<?php if(isset($_POST['thoat']))
{
    include("../../lib/DataProvider.php");
	session_destroy();
    DataProvider::ChangeURL("../../index.php");
}
?>