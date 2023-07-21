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
    //xu li hinh anh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh =time().'_'.$hinhanh;
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    if (isset($_POST['themsanpham'])) {
        $sql_them = "INSERT INTO tbl_sanpham(tensanpham, masp, giasp, soluong, hinhanh, tomtat, noidung,tinhtrang) VALUE('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
    elseif (isset($_POST['suasanpham'])) {
        $sql_update = "UPDATE tbl_sanpham SET tendanhmuc = '".$tenloaisp."', thutu = '".$thutu."'WHERE id_danhmuc = $_GET[iddanhmuc]";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
    else{
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
    
