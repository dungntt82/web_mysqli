<?php
include('../../config/config.php');
$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
// $hinhanh = $_POST[''];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];
//xu li hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;
move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO tbl_sanpham(tensanpham, masp, giasp, soluong, hinhanh, tomtat, noidung,tinhtrang,id_danhmuc) VALUE('" . $tensanpham . "','" . $masp . "','" . $giasp . "','" . $soluong . "','" . $hinhanh . "','" . $tomtat . "','" . $noidung . "','" . $tinhtrang . "','" . $danhmuc . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    header('Location:../../index.php?action=quanlysp&query=them');
} elseif (isset($_POST['suasanpham'])) {
    if ($hinhanh!= '') {
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = $_GET[idsanpham] LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['hinhanh']);
        }
        $sql_update = "UPDATE tbl_sanpham SET tensanpham = '".$tensanpham."', masp = '".$masp."' , giasp = '".$giasp."', soluong = '".$soluong."', tomtat = '". $tomtat. "', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."', hinhanh = '".$hinhanh."' WHERE id_sanpham = $_GET[idsanpham]";
    } else {
        $sql_update = "UPDATE tbl_sanpham SET tensanpham = '".$tensanpham."', masp = '".$masp."' , giasp = '".$giasp."', soluong = '".$soluong."', tomtat = '". $tomtat."', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."' WHERE id_sanpham = $_GET[idsanpham]";
    }

    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlysp&query=them');
} else {
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlysp&query=them');
}
