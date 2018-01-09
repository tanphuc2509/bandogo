<form action="index.php?a=10" method="post" name="frmDangNhap" id="frmDangNhap" onsubmit="return KiemTraDangNhap()">
  <label style="color:#09F"><b>Tài Khoản</b></label><br/>
  <input class="dangnhap" name="userName" id="userName" type="text"  placeholder="Tên đăng nhập"> <Br/> <br/>
  <label style="color:#09C"><b>Mật Khẩu</b></label><br/>
  <input class="dangnhap" name="password" id="password" type="text" placeholder="****"><br/><br/>
  <input name="submit" value="Đăng Nhập" type="submit" style="color:#09F" >
  <input type="button" value="Đăng ký" onclick="window.location.href='index.php?a=8'" style="color:#09F">
</form>

<script type="text/javascript">
    function KiemTraDangNhap()
    {
        var control = document.getElementById("userName");
        if(control.value == "")
        {
            control.focus();
            alert("Không để trống tên đăng nhập");
            return false;
        }

        control = document.getElementById("password");
        if(control.value == "")
        {
            control.focus();
            alert("Không để trống mật khẩu");
            return false;
        }
        return true;
    }
</script>