<?php
$sql_pro = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_danhmuc = '$_GET[id]' ORDER BY tbl_sanpham.id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_danhmuc);
$row_title = mysqli_fetch_array($query_pro);


?>
<h5>Danh mục sản phẩm: <?php echo $row_title['tendanhmuc'] ?></h5>
<ul class="product-list">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
        <li>
            <!-- <a href="#"> -->
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="">
                <p class="title-product">Tên sản phẩm: Tai nghe Sony 001</p>
                <p class="price-product">Giá: 320000</p>
            <!-- </a> -->
        </li>
    <?php
    }
    ?>
</ul>