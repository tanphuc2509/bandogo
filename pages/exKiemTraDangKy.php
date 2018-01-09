<?
//cấu hình thông tin do google cung cấp
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6LflJD8UAAAAALgGqqHtBX2btHWeOjZY-RveotQt';
$secret_key  = '6LflJD8UAAAAAAhUlXZK0O6hXii6vnCxWRTlz-Fm';
//kiem tra submit form
if(isset($_POST['dangky']))
{
   

    //lấy dữ liệu được post lên
    $site_key_post    = $_POST['g-recaptcha-response'];

    //lấy IP của khach
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $remoteip = $_SERVER['REMOTE_ADDR'];
    }
     
    //tạo link kết nối
    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
    //lấy kết quả trả về từ google
    $response = file_get_contents($api_url);
    //dữ liệu trả về dạng json
    $response = json_decode($response);
    if(!isset($response->success))
    {
        echo 'Captcha khong dung';
    }
    if($response->success == true)
    {
        $TenDangNhap = $_POST["txtTenDangNhap"];
        $sql = "select MaTaiKhoan,TenDangNhap,MatKhau,TenHienThi,DiaChi,DienThoai,Email,BiXoa from TaiKhoan where TenDangNhap = '$TenDangNhap'";
        $qr = DataProvider::execQuery($sql);
        if(mysqli_num_rows($qr) > 0)
            echo "Trùng tên đăng nhập";
        else
        {
            $HoTen = $_POST["txtHoTen"];
            $NgaySinh = $_POST["dateNgaySinh"];
            $DiaChi = $_POST["slThanhPho"];
            $MatKhau = $_POST["pwdMatKhau"];
            $Email = $_POST["txtEmail"];
            $SoDienThoai = $_POST["txtSoDienThoai"];
            $sql = "INSERT INTO TaiKhoan VALUES (NULL,'$TenDangNhap','$MatKhau','$HoTen','$DiaChi','$SoDienThoai','$Email',0,1,NULL)";
            $qr = DataProvider::execQuery($sql);
            if($qr == TRUE)
            {
                echo "Thành công! Xin hãy đăng nhập";
            }
            else
                echo "Thất bại! Xin hãy đăng ký lại";
        }
        
    }   
    else{
        echo 'Captcha không đúng!';
    }

    
   
}
?>