<?php 
    include('../../ketnoi/connect.php');
   
    if(isset($_POST['themsanpham'])) {
        //thêm
        $tensanpham = $_POST['tensanpham'];
        $masp = $_POST['ma'];
        $giasp = $_POST['gia'];
        $soluong = $_POST['soluong'];
         //Xử lý hình ảnh
         $hinhanh=$_FILES['hinhanh']['name'];
         $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $hinhanh= time()."_".$hinhanh;
        $tomtat = $_POST['tomtat'];
        $noidung = $_POST['noidung'];
        $tinhtrang = $_POST['tinhtrang'];
        $danhmuc = $_POST['category'];
       

        $sql_them= "INSERT INTO `sanpham`(`tensanpham`, `ma`, `gia`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`,`id_danhmuc`) 
        VALUES ('$tensanpham','$masp','$giasp','$soluong','$hinhanh','$tomtat','$noidung','$tinhtrang','$danhmuc')";
        mysqli_query($conn,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }

    elseif(isset($_POST['suasanpham'])) {
        //sửa
        if($hinhanh!="") {
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
         
        $sql_xoa="DELETE FROM `sanpham` WHERE id_sanpham=$id";
        mysqli_query($conn,$sql_xoa);
            $sql_update= "UPDATE `sanpham` 
        SET `tensanpham`='".$_POST['nameproduct']."',`ma`='".$_POST['code']."',`gia`='".$_POST['price']."',`soluong`='".$_POST['quantity']."',`hinhanh`='".$_POST['image']."',`tomtat`='".$_POST['summary']."',`noidung`='".$_POST['content']."',`tinhtrang`='".$_POST['status']."',`id_danhmuc`='".$_POST['category']."'
        WHERE id_sanpham=$_GET[iddsanpham]";
        //Xóa hình ảnh cũ trong uploads
        $sql ="SELECT * FROM `sanpham` WHERE id_sanpham =$id";
        $query = mysqli_query($conn,$sql);//Thực thi câu lệnh xóa hình trong folder uploads
        while($row=mysqli_fetch_array($query)) {
            unlink("uploads/".$row['hinhanh']);
        }
        }
        else {
        $sql_update= "UPDATE `sanpham` 
        SET `tensanpham`='".$_POST['nameproduct']."',`ma`='".$_POST['code']."',`gia`='".$_POST['price']."',`soluong`='".$_POST['quantity']."',`tomtat`='".$_POST['summary']."',`noidung`='".$_POST['content']."',`tinhtrang`='".$_POST['status']."',`id_danhmuc`='".$_POST['category']."'
        WHERE id_sanpham=$_GET[iddsanpham]";
        }
        mysqli_query($conn,$sql_update);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
    else {
        $id=$_GET['iddsanpham'];
        $sql ="SELECT * FROM `sanpham` WHERE id_sanpham =$id";
        $query = mysqli_query($conn,$sql);//Thực thi câu lệnh xóa hình trong folder uploads
        while($row=mysqli_fetch_array($query)) {
            unlink("uploads/".$row['hinhanh']);
        }
        $sql_xoa="DELETE FROM `sanpham` WHERE id_sanpham=$id";
        mysqli_query($conn,$sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
?>