<?php
$sql_pro = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
$query_pro = mysqli_query($mysqli, $sql_pro);

?>

<h5>Sản phẩm mới nhất</h5>
<ul class="product-list">
    <?php
        while($row = mysqli_fetch_array($query_pro)){
    ?>
    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
        <li>
            <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt="">
            <p class="title-product">Tên sản phẩm: <?php echo $row['tensanpham']?></p>
            <p class="price-product">Giá: <?php echo $row['giasp']?></p>
            <p class="cate-product">Danh mục: <?php echo $row['tendanhmuc']?> </p>
        </li>
    </a>
    <?php
        }
    ?>
</ul>