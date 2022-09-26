<?php 
    $sql_lietke_sp="SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY  id_sanpham DESC";
    $query_lietke_sp=mysqli_query($conn,$sql_lietke_sp);
?>
<p>Liệt kê danh mục sản phẩm </p>
<table border="1px" bgcolor="orange" width="100%" style="border-collapse: collapse;">
  <tr>
      <th>ID</th>
    <th>Tên Sản Phẩm</th>
    <th>Hình Ảnh</th>
    <th>Giá</th>
    <th>Số Lượng</th>
    <th>Danh Mục</th>
    <th>Mã</th>
    <th>Tóm Tắt</th>
    <th>Trạng Thái</th>
    <th>Quản Lý </th>
  </tr>
  <?php 
     $i=0;
     while($row=mysqli_fetch_array($query_lietke_sp)) {
         $i++;
  ?>
  <tr>
      <td><?php echo $i; ?></td>
    <td><?php echo $row['tensanpham']; ?></td>
    <td><img src="module/quanlysanpham/uploads/<?php echo $row['hinhanh'];?>" width="150px"></td>
    <td><?php echo $row['gia']; ?></td>
    <td><?php echo $row['soluong']; ?></td>
    <td><?php echo $row['tendanhmuc']; ?></td>
    <td><?php echo $row['ma']; ?></td>
    <td><?php echo $row['tomtat']; ?></td>
    <td><?php if($row['tinhtrang']==1) {
        echo "Kích hoạt";
    } else {
        echo "Ẩn";
    } 
    ?></td>
    <td>
        <a href="module/quanlysanpham/xuly.php?iddsanpham=<?php echo $row['id_sanpham']; ?>">Xóa</a> | 
        <a href="?action=quanlysanpham&query=sua&iddsanpham=<?php echo $row['id_sanpham']; ?>">Sửa</a>
    </td>
    
  </tr>
  <?php
     }
    ?>
</table>