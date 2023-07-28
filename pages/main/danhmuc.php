<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE id_danhmuc = '$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);

$sql_cate = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[id]' ORDER BY id_danhmuc LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);

?>
<h5>Danh mục sản phẩm: <?php echo $row_title['tendanhmuc'] ?></h5>
<ul class="product-list">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
        <li>
            <a href="#">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                <p class="title-product">Tên sản phẩm: <?php echo $row_pro['tensanpham'] ?></p>
                <p class="price-product">Giá: <?php echo number_format($row_pro['giasp'],0,',','.').'vnđ' ?></p>
            </a>
        </li>
    <?php
    }
    ?>
</ul>