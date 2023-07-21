<?php
$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>
<h3>Sửa danh mục sản phẩm</h3>
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
<table>
  <form method="POST" action="modules/quanlydanhmucsp/xuli.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
    <?php
    while ($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
      # code...

    ?>
      <tr>
        <td>Tên danh mục: </td>
        <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc']?>"></td>
      </tr>
      <tr>
        <td>Thứ tự: </td>
        <td><input type="text" name="thutu" value="<?php echo $dong['thutu']?>"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
      </tr>
    <?php
    }
    ?>
  </form>
</table>