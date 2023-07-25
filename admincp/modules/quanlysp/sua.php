<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<h3>Sửa sản phẩm</h3>
<style>
  table,
  th,
  td {
    border: 1px solid black;
  }

  input,
  textarea {
    width: 100%;
  }

  table {
    width: 100%;
  }
  img{
    width: 200px;
  }
</style>
</style>
<table>
  <?php
  while ($row = mysqli_fetch_array($query_sua_sp)) {
    # code...

  ?>
    <form method="POST" action="modules/quanlysp/xuli.php?idsanpham=<?php echo $row['id_sanpham']?>"  enctype="multipart/form-data">

      <tr>
        <td>Tên sản phẩm: </td>
        <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"></td>
      </tr>
      <tr>
        <td>Mã sản phẩm: </td>
        <td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>
      </tr>
      <tr>
        <td>Giá sản phẩm: </td>
        <td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>
      </tr>
      <tr>
        <td>Số lượng: </td>
        <td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong"></td>
      </tr>
      <tr>
        <td>Hình ảnh: </td>
        <td>
          <input type="file" name="hinhanh">
          <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
        </td>
      </tr>
      <tr>
        <td>Tóm tắt: </td>
        <td><textarea name="tomtat" rows="10" style="resize: none;"><?php echo $row['tomtat'] ?></textarea></td>
      </tr>
      <tr>
        <td>Nội dung: </td>
        <td><textarea name="noidung" rows="10" style="resize: none;"><?php echo $row['noidung'] ?></textarea></td>
      </tr>
      <tr>
        <td>Tình trạng: </td>
        <td>
          <select name="tinhtrang" id="">
            <?php
            if ($row['tinhtrang'] == 1) { ?>
              <option value="1" selected>Kích hoạt</option>
              <option value="0">Ẩn</option>
            <?php
            } else {
            ?>
              <option value="1">Kích hoạt</option>
              <option value="0" selected>Ẩn</option>
            <?php
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
      </tr>

    </form>
  <?php
  }
  ?>
</table>