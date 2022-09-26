<?php 
    $sql_pro = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc ='$_GET[id]' 
    ORDER BY id_sanpham DESC";
    $query_pro= mysqli_query($conn,$sql_pro);
    
    //get tên danh mục
    $sql_cate = "SELECT * FROM danhmuc WHERE danhmuc.id_danhmuc ='$_GET[id]'";
    $query_cate= mysqli_query($conn,$sql_cate);
    $row_title=mysqli_fetch_array($query_cate);

?>

<h3>Danh mục sản phẩm: <?php echo $row_title['tendanhmuc'];?> </h3>
                <ul class="product_list">
                    <?php 
                    while($row_pro= mysqli_fetch_array($query_pro)) {
                    ?>
                        <li>
                            <a href="cuoiki.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
                                <img src="../admin/module/quanlysanpham/uploads/<?php echo $row_pro['hinhanh'];?>">
                                <p class="title_product">Tên sản phẩm: <?php echo $row_pro['tensanpham'];?></p>
                                <p class="price_product">Giá : <?php echo number_format($row_pro['gia'],0,',','.').'vnđ';?></p>
                            </a>
                        </li>
                    <?php 
                    }
                    ?>
                </ul>