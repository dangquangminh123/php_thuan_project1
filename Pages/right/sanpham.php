<p>Chi tiết sản phẩm</p>
<?php 
    $sql_chitiet = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc = danhmuc.id_danhmuc AND sanpham.id_sanpham='$_GET[id]' ";
    $query_chitiet= mysqli_query($conn,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
<div class="wrapper_chitiet">
    <div class="hinhanh_sanpham">
            <img width="100%" src="../admin/module/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh'];?>">
    </div>
    <form method="POST" action="../Pages/right/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']; ?>">
        <div class="chitiet_sanpham">
                <h3 style="margin:0px">Tên Sản Phẩm:<?php echo $row_chitiet['tensanpham']; ?></h3>
                <p>Mã sản phẩm:<?php echo $row_chitiet['ma']; ?></p>
                <p>Giá sản phẩm:<?php echo number_format($row_chitiet['gia'],0,',','.').'vnđ'; ?></p>
                <p>Số lượng:<?php echo $row_chitiet['soluong']; ?></p>
                <p>Danh mục sản phẩm:<?php echo $row_chitiet['tendanhmuc']; ?></p>
                <p><input class="themgiohang" type="submit" name="themvaogio" value="thêm giỏ hàng"></p>
        </div>
    </form>
</div>
<?php 
    }
?>
