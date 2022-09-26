<?php 
    session_start();
    include('../../admin/ketnoi/connect.php');
    //thêm giỏ hàng
    if(isset($_GET['cong'])) {
        $id=$_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            //Ở đây nghĩa là những sản phẩm mà được thêm vào giỏ hàng mà không trùng 1 cái sản phẩm nào đã có trong giỏ thì nó vẫn là nó! số lượng ko được cập nhập
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],
                'hinhanh'=>$cart_item['hinhanh'],'ma'=>$cart_item['ma']);
                $_SESSION['cart']=$product;
            }
            //Còn nếu sản phẩm mà đã được thêm vào trong giỏ hàng giờ thì mình tăng số lượng sản phẩm này bằng việc bấm vào cộng thì nó sẽ tăng số lượng lên
            else {
                $tangsoluong = $cart_item['soluong'] +1;
                if($cart_item['soluong']<10) {
                //Câu lệnh if này là dùng để kiểm tra nếu số lượng của 1 sản phẩm bé hơn 10 thì sẽ được phép tăng lên và nó sẽ tạo lại 1 mảng bao gồm các thông tin sản phẩm bên dưới
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'gia'=>$cart_item['gia'],
                'hinhanh'=>$cart_item['hinhanh'],'ma'=>$cart_item['ma']);
                }
                else {
                //Câu lệnh ở đây dùng để mô tả khi sản phẩm mình muốn tăng số lượng mà số lượng lúc này đã đạt ngưỡng là 10 thì sẽ mặc định số lượng sản phẩm này trong giỏ hàng là 10 và không được tăng lên nữa
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],
                'hinhanh'=>$cart_item['hinhanh'],'ma'=>$cart_item['ma']);
                }
                $_SESSION['cart']=$product;
            }
        }
        header('Location:../../Pages/cuoiki.php?quanly=giohang');
    }
    //Trừ số lượng
    if(isset($_GET['tru'])) {
        $id=$_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            //Ở đây nghĩa là những sản phẩm mà được thêm vào giỏ hàng mà không trùng 1 cái sản phẩm nào đã có trong giỏ thì nó vẫn là nó! số lượng ko được cập nhập
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],
                'hinhanh'=>$cart_item['hinhanh'],'ma'=>$cart_item['ma']);
                $_SESSION['cart']=$product;
            }
            //Còn nếu sản phẩm mà đã được thêm vào trong giỏ hàng giờ thì mình tăng số lượng sản phẩm này bằng việc bấm vào trừ thì nó sẽ giảm số lượng xuống
            else {
                $tangsoluong = $cart_item['soluong'] -1;
                if($cart_item['soluong']>1) {
                //Câu lệnh if này là dùng để kiểm tra nếu số lượng của 1 sản phẩm lơn hơn 1 thì sẽ được phép giảm lên và nó sẽ tạo lại 1 mảng bao gồm các thông tin sản phẩm bên dưới
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'gia'=>$cart_item['gia'],
                'hinhanh'=>$cart_item['hinhanh'],'ma'=>$cart_item['ma']);
                }
                else {
                //Câu lệnh ở đây dùng để mô tả khi sản phẩm mình muốn giảm số lượng mà số lượng lúc này đã đạt ngưỡng là 1 thì sẽ mặc định số lượng sản phẩm này trong giỏ hàng là 1 và không được giảm xuống nữa
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],
                'hinhanh'=>$cart_item['hinhanh'],'ma'=>$cart_item['ma']);
                }
                $_SESSION['cart']=$product;
            }
        }
        header('Location:../../Pages/cuoiki.php?quanly=giohang');
    }
    //xóa sản phẩm
    if(isset($_SESSION['cart'])&& isset($_GET['xoa'])) {
        $id=$_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
    /*ở đây có nghĩa rằng nếu trong mục giỏ hàng ta bấm nút xóa hay tại sản phẩm có Id là 8 thì sản phẩm có id là 8 đó sẽ bị loại bỏ, bằng việc là gắn biến $id 
    sẽ là 8 (qua $_GET['xoa]) và rồi từng id hiện có trong hàng sẽ khác giá trị của biến $id kia thì chỉ có biến $id kia sẽ không được khởi tạo trong giỏ hàng */
            if($cart_item['id']!=$id){
                $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],
                'hinhanh'=>$cart_item['hinhanh'],'ma'=>$cart_item['ma']);
            }
            $_SESSION['cart']=$product;
            header('Location:../../Pages/cuoiki.php?quanly=giohang');
        }
    }
    //Xóa tất cả sản phẩm
    if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1) {
        unset($_SESSION['cart']);//Chỉ xóa 1 cái session được chỉ định là phải xóa
        header('Location:../../Pages/cuoiki.php?quanly=giohang');
    }
    //thêm sản phẩm vào giỏ hàng
    if(isset($_POST['themvaogio'])) {
        $id=$_GET['idsanpham'];
        $soluong=1;
        $sql="SELECT * FROM sanpham WHERE id_sanpham=$id";
        $query= mysqli_query($conn,$sql);
        $row =mysqli_fetch_array($query);
        if($row) {
            $new_product=array(array('tensanpham'=>$row['tensanpham'], 'id'=>$id,'soluong'=>$soluong,'gia'=>$row['gia'],
            'hinhanh'=>$row['hinhanh'],'ma'=>$row['ma']));
            //Kiểm tra session cho giỏ hàng đã tồn tại chưa
            if(isset($_SESSION['cart'])) {
                $found = false;
                foreach($_SESSION['cart'] as $cart_item) {
                    //Nếu dữ sản phẩm này đã được thêm vào lần đầu
                    if($cart_item['id']==$id) {
                        $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],'soluong'=>$soluong+1,'gia'=>$cart_item['gia'],
                            'hinhanh'=>$cart_item['hinhanh'],'ma'=>$cart_item['ma']);
                            $found=true;
                    }
                    //Nếu đây là 1 sản phẩm khác với cái ban đầu đã được thêm vào
                    else {
                        $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],
                        'hinhanh'=>$cart_item['hinhanh'],'ma'=>$cart_item['ma']);
                    }
                }
                if($found == false)
                //hàm array_merge liên kết dữ liệu 2 mảng product và new product lại với nhau (nếu thấy dữ liệu sản phẩm được thêm và sản phẩm đã ở trong giỏ hàng trùng nhau)
                {
                    $_SESSION['cart']=array_merge($product,$new_product);
                }
                else {
                    $_SESSION['cart']=$product;
                }
            }

            else {
                $_SESSION['cart'] = $new_product;
            }
        }
        header('Location:../../Pages/cuoiki.php?quanly=giohang');
    }
?>