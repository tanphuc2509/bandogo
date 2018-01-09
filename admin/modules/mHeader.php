<div id="header">
    <h2>XƯỞNG MỘC VÂN KHOA</h2>
    <div id="topmenu">
    <?php
        $current="";
        if(isset($_GET['key']))
        { 
            switch($_GET['key'])
            {
                case "hsx" : case "hsxThem" : case "hsxSua" : $current = "hsx"; break;
                case "sp" : case "psThem" : case "spSua" : $current = "sp"; break;
                case "lsp" : case "lspThem" : case "lspSua" : $current = "lsp"; break;
                case "user": case "userThem": case "userSua": $current = "user";break;
                case "donhang": case "donhangThem": case "donhangSua": $current = "donHang";break;
            }
        }
	?>
        <ul>		
            <li <?php if($current=="") echo 'class="current"'; ?> ><a href="index.php">TRANG CHỦ</a></li>
            <li <?php if($current=="hsx") echo 'class="current"'; ?>><a href="index.php?key=hsx" >HÃNG SẢN XUẤT</a></li>
            <li <?php if($current=="lsp") echo 'class="current"'; ?> ><a href="index.php?key=lsp">LOẠI SẢN PHẨM</a></li>
            <li <?php if($current=="sp") echo 'class="current"'; ?> ><a href="index.php?key=sp">SẢN PHẨM</a></li>
            <li <?php if($current=="user") echo 'class="current"'; ?> ><a href="index.php?key=user">USERS</a></li>
            <li <?php if($current=="donHang") echo 'class="current"'; ?> ><a href="index.php?key=donhang">Quản lý đơn hàng</a></li>
        </ul>
    </div>
</div>
