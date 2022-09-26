
<p>Giỏ Hàng </p>
<?php 
    if(isset($_SESSION['dangky'])) {
      echo "Xin Chào:" .'<span style="color: red;">'.$_SESSION['dangky']. '</span>';
    }
?>
<?php  
    if(isset($_SESSION['cart'])) {
    }
?>
<table style="width:100%; text-align: center;border-collapse: collapse" border="1">
  <tr>
    <th>Id</th>
    <th>Mã Sản Phẩm</th>
    <th>Tên Sản Phẩm</th>
    <th>Hình Ảnh</th>
    <th>Số Lượng</th>
    <th>Giá Sản Phẩm</th>
    <th>Thành tiền</th>
    <th>Quản Lý</th>
  </tr>

    <?php
    if(isset($_SESSION['cart'])){
        $i =0;
        $tongtien=0;
        foreach($_SESSION['cart'] as $cart_item) {
            //Thành tiền phải ở trong foreach vì mỗi lần chạy 1 sản phẩm thì mới biết được số lượng sản phẩm nhân với giá thì mới biết được tổng giá tiền của riêng sản phẩm đó
            $thanhtien=$cart_item['soluong'] * $cart_item['gia'];
            $tongtien +=$thanhtien;
            $i++;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $cart_item['ma'];?></td>
        <td><?php echo $cart_item['tensanpham'];?></td>
        <td><img src="../admin/module/quanlysanpham/uploads/<?php echo $cart_item['hinhanh'];?>" width="150px"></td>
        <td>
          <a href="../Pages/right/themgiohang.php?cong=<?php echo $cart_item['id']; ?>">+</a>
            <?php echo $cart_item['soluong'];?>
          <a href="../Pages/right/themgiohang.php?tru=<?php echo $cart_item['id']; ?>">-</a>
        
        </td>
        <td><?php echo number_format($cart_item['gia'],0,',','.').'vnđ';?></td>
        <td><?php echo number_format($thanhtien,0,',','.').'vnđ';?></td>
        <td><a href="../Pages/right/themgiohang.php?xoa=<?php echo $cart_item['id']; ?>">Xóa</a></td>
  
    </tr>
    <?php
        }
    ?>
    <tr>
        <td colspan="8">
            <p style="float: left;">Tổng tiền là: <?php echo number_format($tongtien,0,',','.').'vnđ';?> </p>
            <p style="float: right;"><a href="../Pages/right/themgiohang.php?xoatatca=1">Xóa tất cả </a></p>
            <div style="clear:both;"></div>
            <?php
              if(isset($_SESSION['dangky'])) {
                ?>
                  <p><a href="right/thanhtoan.php">Đặt Hàng</a></p>
                <?php 
              } 
              else {
                ?>
                  <p><a href="cuoiki.php?quanly=dangky">Đăng Ký Đặt Hàng</a></p>
                <?php 
              }
            ?>
            
        </td>
        
    </tr>
      <?php  
    }
    else {
  ?>
    <tr>
        <td colspan="8"><p>Hiện tại giỏ hàng bạn đang trống </p></td>
    </tr>
  <?php 
    }
  ?> 
</table>