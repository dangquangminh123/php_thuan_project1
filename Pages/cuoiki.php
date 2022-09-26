<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cuoiki.css">

    <title>Cửa hàng Điện Thoại</title>
</head>
<body>
        <div class="wrapper">
            <?php
                session_start();
                include("../admin/ketnoi/connect.php"); 
                include("header.php");
                include("menu.php");
                include("main.php");
                include("footer.php");
            ?>   
        </div>
</body>
</html>