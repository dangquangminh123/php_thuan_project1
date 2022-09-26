<?php 
    // session_start();
    if(isset($_POST['dangky'])) {
        $tenkhachhang = $_POST['hoten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];
        $sql_dangky=mysqli_query($conn,"INSERT INTO dangky(tenkhachhang,email,diachi,matkhau,dienthoai) 
            VALUE('$tenkhachhang','$email','$dienthoai','$matkhau','$diachi')");
        if($sql_dangky) {
            echo "<p style='color:green;'>Bạn đã đăng ký thành công </p>";
            $_SESSION['dangky'] =$tenkhachhang;
            header("Location:cuoiki.php?quanly=giohang");
        }
    }
?>

<p>Đăng Ký Thành Viên </p>
            <form action="" method="POST">
                <table class="bang" width="100%" border="1" style="border-collapse: collapse;">
                    <tr>
                        <td>Họ và Tên </td>
                        <td><input type="text" size="50" name="hoten"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" size="50" name="email"></td>
                    </tr>
                    <tr>
                        <td>Điện Thoại </td>
                        <td><input type="text" size="50" name="dienthoai"></td>
                    </tr>
                    <tr>
                        <td>Địa Chỉ </td>
                        <td><input type="text" size="50" name="diachi"></td>
                    </tr>
                    <tr>
                        <td>Mật Khẩu </td>
                        <td><input type="text" size="50" name="matkhau"></td>
                    </tr>
                    <tr>
                        <td ><input type="submit" name="dangky" value="Đăng Ký"></td>
                        <td> <a href="cuoiki.php?quanly=dangnhap">Đăng Nhập nếu đã có tài khoản</a></td>
                    </tr>
                </table>
            </form>