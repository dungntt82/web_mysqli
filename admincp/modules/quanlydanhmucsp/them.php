<h3>Thêm danh mục sản phẩm</h3>
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
  <form  method="POST" action="modules/quanlydanhmucsp/xuli.php">
    <tr>
      <td>Tên danh mục: </td>
      <td><input type="text" name="tendanhmuc"></td>
    </tr>
    <tr>
      <td>Thứ tự: </td>
      <td><input type="text" name="thutu"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
    </tr>
  </form>
</table>