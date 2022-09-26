<?php 
    session_start();
    include("ketnoi/connect.php");
    if(isset($_POST['login'])) {
        $taikhoan= $_POST['tendangnhap'];
        //Mã hóa mật khẩu bằng hàm md5
        $matkhau= md5($_POST['matkhau']);
        $sql="SELECT * FROM admin WHERE username='".$taikhoan."' AND password='".$matkhau."'";
        $row=mysqli_query($conn,$sql);
        $count = mysqli_num_rows($row);
        if($count>0) {
            $_SESSION['login']=$taikhoan;
            header("Location:index.php");
        }
        else {
            echo "Đăng nhập không thành công! Tài khoản hoặc mật khẩu bạn nhập không đúng! Vui lòng thử lại." .'<br>';
            header("Location:login.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
    body {
        background: #f2f2f2;
    }
    .wrapper_dangnhap {
        width: 35%;
        margin: 0 auto;
        padding: 10px;
    }    
    </style>
</head>
<body>
        <div class="wrapper_dangnhap">
            <form action="" autocomplete="off" method="POST">
                <table border="1" align="center">
                    <tr>
                        <td colspan="2"> <h3> Mời Bạn Đăng Nhập</h3></td>
                    </tr>
                    <tr>
                        <td>Tên Đăng Nhập</td>
                        <td><input type="text" name="tendangnhap"></td>
                    </tr>
                    <tr>
                        <td>Mật Khẩu</td>
                        <td><input type="password" name="matkhau"></td>
                    </tr>
                    </tr>
                        <td colspan="2"><input type="submit" name="login" value="Đăng Nhập"></td>
                    </tr>
                </table>
            </form>
        </div>
</body>
</html>