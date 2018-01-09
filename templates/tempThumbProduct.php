<div class="content_NoiDungSanPham">
                <span><a href="index.php?a=4&id=<?php echo $row['MaSanPham'];?>"><img src="images/<?php echo $row['HinhURL'];?>" width="250px" height="280px" /></a></span><br/>
                <span><?php echo $row['TenSanPham'];?></span><br/>
                <span>Giá: <?php echo number_format($row['GiaSanPham']);?> đ </span><br/>
                <span><b><a href="index.php?a=4&id=<?php echo $row['MaSanPham'];?>" style="color: blue;">Chi Tiết</a></b></span>
</div>