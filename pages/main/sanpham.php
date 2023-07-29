<p>CHI TIẾT SẢN PHẨM</p>
<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
    <div class="wrapper_chitiet">
        <div class="hinhanh_sanpham">
            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
        </div>
        <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
            <div class="chitiet_sanpham">
                <h3>Tên sản phẩm: <?php echo $row_chitiet['tensanpham'] ?></h3>
                <h3>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></h3>
                <h3>Giá sản phẩm: <?php echo number_format($row_chitiet['giasp'], 0, ',', '.') . ' vnđ' ?></h3>
                <h5>Tóm tắt: <?php echo $row_chitiet['tomtat'] ?></h5>
                <p>Nội dung: <?php echo $row_chitiet['noidung'] ?></p>
                <p><input class="btnthemgiohang" type="submit" value="THÊM GIỎ HÀNG" name="themgiohang"></p>
            </div>
        </form>
    </div>

<?php
}
?>