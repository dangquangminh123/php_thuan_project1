<?php 
    $sql_lietke="SELECT * FROM `danhmuc` ORDER BY  thutu DESC";
    $query_lietke=mysqli_query($conn,$sql_lietke);
?>
<p>Liệt kê danh mục sản phẩm </p>
<table border="1px" width="100%" style="border-collapse: collapse;">
  <tr>
      <th>ID</th>
    <th>Tên danh mục</th>
    <th>quản lý</th>
  </tr>
  <?php 
     $i=0;
     while($row=mysqli_fetch_array($query_lietke)) {
         $i++;
  ?>
  <tr>
      <td><?php echo $i; ?></td>
    <td><?php echo $row['tendanhmuc']; ?></td>
    <td>
        <a href="module/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']; ?>">Xóa</a> | 
        <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']; ?>">Sửa</a>
    </td>
    
  </tr>
  <?php
     }
    ?>
</table>