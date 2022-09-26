
<?php 
    $sql_sua="SELECT * FROM `sanpham` WHERE id_sanpham='$_GET[iddsanpham]'";
    $query_sua=mysqli_query($conn,$sql_sua);
?>
<p>Sửa Sản Phẩm </p>
<table border="1px" width="100%" style="border-collapse: collapse;">
    <?php 
        while($row= mysqli_fetch_array($query_sua))  {
    ?>
    <form method="POST" action="module/quanlysanpham/xuly.php?iddsanpham=<?php echo $row['id_sanpham']; ?>" enctype="multipart/form-data">
  <tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="nameproduct"></td>
  </tr>
  <tr>
    <td>Mã Sản Phẩm</td>
    <td><input type="text" value="<?php echo $row['ma'] ?>" name="code"></td>
  </tr> 
  <tr>
    <td>Giá Sản Phẩm</td>
    <td><input type="text" value="<?php echo $row['gia'] ?>" name="price"></td>
  </tr>
  <tr>
    <td>Số Lượng Sản Phẩm</td>
    <td><input type="text" value="<?php echo $row['soluong'] ?>" name="quantity"></td>
  </tr>
  <tr>
    <td>Hình Ảnh Sản Phẩm</td>
    <td><input type="file"  name="image">
    <img src="module/quanlysanpham/uploads/<?php echo $row['hinhanh'];?>" width="150px">
    </td>

  </tr>
  <tr>
    <td>Tóm Tắt</td>
    <td><textarea rows="10" cols="40" width="100%" name="summary" style="resize: none"><?php echo $row['tomtat'] ?></textarea></td>
  </tr>    
  <tr>
    <td>Nội Dung</td>
    <td><textarea rows="10" cols="40" width="100%" name="content" style="resize: none"><?php echo $row['noidung'] ?></textarea></td>
  </tr>
    <tr>
        <td>Danh Mục Sản Phẩm</td>
        <td>
            <select name="category">
              <?php 
                $sql_danhmuc="SELECT * FROM `danhmuc` ORDER BY id_danhmuc DESC";
                $query_danhmuc= mysqli_query($conn,$sql_danhmuc);
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']) {
              ?>
              <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
              <?php 
                }else {
              ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php 
                }
            }
                ?>
            </select>
        </td>
    </tr>

    <tr>
        <td>Tình Trạng</td>
        <td>
            <select name="status">
                <?php 
                    if($row['status']==1) {
                ?>
              <option value="1" selected>Kích Hoạt</option>
              <option value="0">Ẩn </option>
              <?php 
                }
                else {
                ?>
                <option value="1">Kích Hoạt</option>
              <option value="0" selected>Ẩn </option>
              <?php
                }
                ?> 
              
            </select>
        </td>
    </tr>    
  <tr>
    <td colspan=2><input type="submit" name="suasanpham" value="sửa sản phẩm"></td>
  </tr>
    </form>
    <?php
        }
    ?>
</table>