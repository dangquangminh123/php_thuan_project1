<div id="main">
            <?php 
                include("left/sidebar.php");
            ?>
            <div class="maincontent">
                <?php 
                    if(isset($_GET['quanly'])){
                        $tam= $_GET['quanly'];
                    }
                    else {
                        $tam= '';
                    }
                    if($tam=='danhmucsanpham') {
                        include("right/danhmuc.php");
                    }
                    elseif($tam=='giohang') {
                        include("right/giohang.php");
                    }
                    elseif($tam=='tintuc') {
                        include("right/tintuc.php");
                    }
                    elseif($tam=='lienhe') {
                        include("right/lienhe.php");
                    }
                    elseif($tam=='sanpham') {
                        include("right/sanpham.php");
                    }
                    elseif($tam=='dangky') {
                        include("right/dangky.php");
                    }
                    elseif($tam=='thanhtoan') {
                        include("right/thanhtoan.php");
                    }
                    elseif($tam=='dangnhap') {
                        include("right/dangnhap.php");
                    }
                    elseif($tam=='timkiem') {
                        include("right/timkiem.php");
                    }
                    else {
                        include("right/main1.php");
                    }
                ?>
            </div>
        </div>