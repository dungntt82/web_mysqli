<h3>Thêm sản phẩm</h3>
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
<table >
  <form method="POST" action="modules/quanlysp/xuli.php" enctype="multipart/form-data">
    <tr>
      <td>Tên sản phẩm: </td>
      <td><input type="text" name="tensanpham"></td>
    </tr>
    <tr>
      <td>Mã sản phẩm: </td>
      <td><input type="text" name="masp"></td>
    </tr>
    <tr>
      <td>Giá sản phẩm: </td>
      <td><input type="text" name="giasp"></td>
    </tr>
    <tr>
      <td>Số lượng: </td>
      <td><input type="text" name="soluong"></td>
    </tr>
    <tr>
      <td>Hình ảnh: </td>
      <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
      <td>Tóm tắt: </td>
      <td><textarea name="tomtat" rows="10" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>Nội dung: </td>
      <td><textarea name="noidung" rows="10" style="resize: none;"></textarea></td>
    </tr>
    <tr>
      <td>Tình trạng: </td>
      <td>
        <select name="tinhtrang" id="">
          <option value="1">Kích hoạt</option>
          <option value="0">Ẩn</option>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="themsanpham" value="Thêm danh mục sản phẩm"></td>
    </tr>
  </form>
</table>