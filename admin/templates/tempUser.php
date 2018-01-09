<tr>
    <td><?php echo $row["MaTaiKhoan"];?></td>
    <td><?php echo $row["TenDangNhap"];?></td>
    <td><?php echo $row["TenHienThi"];?></td>
    <td><?php echo $row["DiaChi"];?></td>
    <td><?php echo $row["DienThoai"];?></td>
    <td><?php echo $row["Email"];?></td>
    <td><?php echo $row["BiXoa"];?></td>
    <td><?php if($row["MaTaiKhoan"] == 1) echo "Tài khoản thường"; else echo "Quản trị viên";?></td>
    <td><a href="pages/pXoaUser.php?MaTaiKhoan=<?php echo $row["MaTaiKhoan"]; ?>">Xoá</a>/<a href="index.php?key=userSua&MaTaiKhoan=<?php echo $row["MaTaiKhoan"]; ?>">Sửa</a></td>
  </tr>