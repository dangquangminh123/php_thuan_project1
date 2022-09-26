<?php 
    include('../../ketnoi/connect.php');
   
    if(isset($_POST['themdanhmuc'])) {
        //thêm
        $tenloaisanpham = $_POST['tendanhmuc'];
        $thutu = $_POST['thutu'];
        $sql_them= "INSERT INTO `danhmuc`(`tendanhmuc`, `thutu`) VALUES ('$tenloaisanpham','$thutu')";
        mysqli_query($conn,$sql_them);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }

    elseif(isset($_POST['suadanhmuc'])) {
        //sửa
        $sql_update= "UPDATE `danhmuc` SET `tendanhmuc`='".$_POST['namedanhmuc']."',`thutu`='".$_POST['order']."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        mysqli_query($conn,$sql_update);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }
    else {
        $id=$_GET['iddanhmuc'];
        $sql_xoa="DELETE FROM `danhmuc` WHERE id_danhmuc=$id";
        mysqli_query($conn,$sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }
?>