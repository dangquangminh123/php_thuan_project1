<div class="clear"></div>
<div class="main"> 
    <?php 
        if(isset($_GET['action']) && $_GET['query']) {
            $tam=$_GET['action'];
            $query=$_GET['query'];    
        }
        else {
            $tam='';
            $query='';
        }
        if($tam=='quanlydanhmucsanpham' && $query=='them') {
            include("module/quanlydanhmucsp/them.php");
            include("module/quanlydanhmucsp/Lietke.php");
        }
        elseif($tam=='quanlydanhmucsanpham' && $query=='sua') {
            include("module/quanlydanhmucsp/sua.php");
        }

        elseif($tam=='quanlysanpham' && $query=='them') {
            include("module/quanlysanpham/them.php");
            include("module/quanlysanpham/Lietke.php");
        }
        elseif($tam=='quanlysanpham' && $query=='sua') {
            include("module/quanlysanpham/sua.php");
        }
        else {
            include("module/trangchinh.php");
        }
    
    ?>

</div>