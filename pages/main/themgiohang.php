<p>THÊM GIỎ HÀNG</p>
<?php
session_start();
include('../../admincp/config/config.php');
if (isset($_POST['themgiohang'])) {
    // session_destroy()
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham ='" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row =  mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array('tensanpham' => $row['tensanpham'], 'soluong' => $soluong, 'id' => $id, 'giasp' => $row['giasp'], 'hinhanh' => $row['hinhanh'], 'masp' => $row['masp']));
        //kiểm tra session giỏ hàng tồn tại hay chưa.
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                # code...
                if ($cart_item['id'] == $id) {
                    #nếu dữ liệu trùng
                    $product[] = array(array('tensanpham' => $cart_item['tensanpham'],  'soluong' => $soluong+1, 'id' => $cart_item['id'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']));
                    $found = true;
                } else {
                    #nếu dữ liệu không trùng
                    $product[] = array(array('tensanpham' => $cart_item['tensanpham'],  'soluong' => $soluong, 'id' => $cart_item['id'], 'giasp' => $cart_item['giasp'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']));
                }
            }
            if($found==false){
                #liên kết dữ liệu neu product voi product
                $_SESSION['cart'] = array_merge($product,$new_product);
            }
            else{
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    header('location:../../index.php?quanly=giohang');
}
?>