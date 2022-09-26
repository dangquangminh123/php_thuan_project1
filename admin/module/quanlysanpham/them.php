<p>Thêm Sản Phẩm </p>
<table border="1px" width="100%" style="border-collapse: collapse;">
    <form method="POST" action="module/quanlysanpham/xuly.php" enctype="multipart/form-data">
  <tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" name="tensanpham"></td>
  </tr>
  <tr>
    <td>Mã Sản Phẩm</td>
    <td><input type="text" name="ma"></td>
  </tr> 
  <tr>
    <td>Giá Sản Phẩm</td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td>Số Lượng Sản Phẩm</td>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
    <td>Hình Ảnh Sản Phẩm</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Tóm Tắt</td>
    <td><textarea rows="10" cols="40" width="100%" name="tomtat" style="resize: none"></textarea></td>
  </tr>    
  <tr>
    <td>Nội Dung</td>
    <td><textarea rows="10" cols="40" width="100%" name="noidung" style="resize: none"></textarea></td>
  </tr>
    <tr>
        <td>Danh Mục Sản Phẩm</td>
        <td>
            <select name="category">
              <?php 
                $sql_danhmuc="SELECT * FROM `danhmuc` ORDER BY id_danhmuc DESC";
                $query_danhmuc= mysqli_query($conn,$sql_danhmuc);
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
              ?>
              <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
              <?php 
                }
              ?>
            </select>
        </td>
    </tr>    
    <tr>
    <tr>
        <td>Tình Trạng</td>
        <td>
            <select name="tinhtrang">
              <option value="1">Kích Hoạt</option>
              <option value="0">Ẩn </option>
            </select>
        </td>
    </tr>    
  <tr>
    <td colspan=2><input type="submit" name="themsanpham" value="thêm sản phẩm"></td>
  </tr>
  </form>
</table>