<div id="header">
    	<div id="header_Hinh">
    	<img src="images/25319999_1203733243061692_265521252_o.png" width="700px" height="150px"   />
        </div>
        <div id="header_DangNhap">
        	<?php 
				if(isset($_SESSION['MaTaiKhoan']) && $_SESSION['MaLoaiTaiKhoan'] == 1)
					include("mThongTinTaiKhoan.php");
				else
					include("mDangNhapTaiKhoan.php");
					
			?>
        </div>
    </div>