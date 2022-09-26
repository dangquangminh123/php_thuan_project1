
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/styleadmin.css">
    <title>Document</title>
</head>
<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
        header("Location:login.php");
    }
?>
<body>
    <h3 class="title_admin">Trang Dành cho những người quản lý hệ thống sản phẩm</h3>
    <div class="wrapper">
            <?php 
                include("ketnoi/connect.php");
                include("module/header.php");
                include("module/menu.php");
                include("module/main.php");
                include("module/footer.php");
            ?>   
        </div>
</body>
</html>