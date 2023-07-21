<?php
$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<style>
  table,
  th,
  td {
    border: 1px solid black;
  }

  input,textarea{
    width: 100%;
  }
  table{
    width: 100%;
  }

</style>
<p>Liệt kê danh mục sản phẩm</p>
<table>
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Quản lí</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tendanhmuc'] ?></td>
            <td>
                <a href="modules/quanlydanhmucsp/xuli.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>