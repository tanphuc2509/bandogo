<div id="Content_PhanTrang">
<?php
//Dem so dong cua bang tinh
     $sl = "select count(*) from SanPham WHERE SanPham.MaLoaiSanPham = $id";
     $result = DataProvider::execQuery($sl);
     $row = mysqli_fetch_array($result);
     $number_of_row = $row['0'];
    //Tinh so luong trang
    $number_of_page = ceil($number_of_row / $rowPerPage);
    if($curPage > 1)
    {?>
       <a href="index.php?a=3&id=<?php echo $id ?>&page=1">Đầu</a> <a href="index.php?a=3&page=<?php echo ($curPage - 1)?>&id=<?php echo $id ?>">Trước</a>
    <?php 
    }?>
    <?php 
    for($page = 1; $page <= $number_of_page; $page++)
    {
        //Khong xuat hien lien ket cho trang hien tai
        if($page == $curPage) 
            echo "<strong>".$page."</strong>";
        else
            echo "<a href='index.php?a=3&id=$id&page="."$page"."'>".$page."</a>";
    }
?>
<?php 
    if($curPage < $number_of_page)
    {
?>
        <a href="index.php?a=3&id=<?php echo $id ?>&page=<?php echo $curPage + 1?>">sau</a> <a href="index.php?a=3&id=<?php echo $id ?>&page=<?php echo $number_of_page?>">Cuối</a>
<?php 
    }
?>
</div>