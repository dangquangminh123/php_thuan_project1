<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kết nối </title>
</head>
<body>
    <?php 
        $servername="localhost";
        $username="root";
        $pass="";
        $dataname="website_cuoiki";
        $conn=mysqli_connect($servername,$username,$pass,$dataname);
        if(!$conn) {
            echo "Kết nối thất bại" .'<br>';
        }
        else {
            echo "Kết nối thành công" . '<br>';
        }
    ?>
</body>
</html>