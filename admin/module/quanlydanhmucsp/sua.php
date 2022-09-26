<p>Sửa  danh mục </p>
<?php 
    $sql_sua="SELECT * FROM `danhmuc` WHERE id_danhmuc='$_GET[iddanhmuc]'";
    $query_sua=mysqli_query($conn,$sql_sua);
?>
<table border="1px" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="module/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']; ?>">
    <?php
        while($dong = mysqli_fetch_array($query_sua)) {
    ?>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="namedanhmuc"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="order"></td>
        </tr> 
        <tr>
            <td colspan=2><input type="submit" name="suadanhmuc" value="sửa danh mục sản phẩm"></td>
        </tr>
    <?php
        }
    ?>
  
</table>