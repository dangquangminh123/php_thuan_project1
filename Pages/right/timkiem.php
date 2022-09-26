<?php 
    if(isset($_POST['timkiem'])) {
        $tukhoa= $_POST['tukhoa'];
    }
    else {
        $tukhoa= "";
    }
    $sql_sea = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc AND sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_sea= mysqli_query($conn,$sql_sea);

?>
<h3>Từ Khóa tìm kiếm:<?php echo $_POST['tukhoa'];?></h3>
                <ul class="product_list">
                    <?php 
                        while($row =  mysqli_fetch_array($query_sea)){ 
                    ?>
                    <li>
                        <a href="cuoiki.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
                            <img src="../admin/module/quanlysanpham/uploads/<?php echo $row['hinhanh'];?>">
                            <p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham'];?></p>
                            <p class="price_product">Giá : <?php echo number_format($row['gia'],0,',','.').'vnđ';?></p>
                            <p style="text-align: center;color:#d1d1d1;"><?php echo $row['tendanhmuc'];?></p>
                        </a>
                    </li>
                    <?php 
                        }
                    ?>
                </ul>