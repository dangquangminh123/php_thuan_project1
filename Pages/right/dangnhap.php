<?php 
    if(isset($_POST['dangnhap'])) {
        $email= $_POST['tendangnhap'];
        //Mã hóa mật khẩu bằng hàm md5
        $matkhau= md5($_POST['matkhau']);
        $sql="SELECT * FROM dangky WHERE email='".$email."' AND matkhau='".$matkhau."'";
        $row=mysqli_query($conn,$sql);
        $count = mysqli_num_rows($row);
        $row_dulieu = mysqli_fetch_array($row);
        if($count>0) {
            $_SESSION['dangky']=$row_dulieu['tenkhachhang'];
            header("Location:index.php?quanly=giohang");
        }
        else {
            echo "Đăng nhập không thành công! Tài khoản hoặc mật khẩu bạn nhập không đúng! Vui lòng thử lại." .'<br>';

        }
    }
?>
            <form action="" autocomplete="off" method="POST">
                <table border="1" width="50%" align="center">
                    <tr>
                        <td colspan="2"> <h3>Đăng nhập khách hàng </h3></td>
                    </tr>
                    <tr>
                        <td>Tên Đăng Nhập</td>
                        <td><input type="text" size="50" name="tendangnhap" placeholder="Email...."></td>
                    </tr>
                    <tr>
                        <td>Mật Khẩu</td>
                        <td><input type="password" size="50" name="matkhau" placeholder="Password...."></td>
                    </tr>
                    </tr>
                        <td colspan="2"><input type="submit" name="dangnhap" value="Đăng Nhập"></td>
                    </tr>
                </table>
            </form>