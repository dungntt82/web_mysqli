<?php
    session_start();

?>
<p>Gio hang</p>
<?php
    // if(isset($_SESSION['cart'])){
    //     echo '<pre>';
    //     print_r($_SESSION['cart']);
    //     echo '</pre>';
    // }
?>
<style>
  table,
  td,th
  {
    border: 1px solid black;
    text-align: left;
  }

  input,textarea{
    width: 100%;
  }
  table{
    width: 100%;
  }
  img{
    width: 100px;
  }

</style>
<table>
  <tr>
    <th>ID</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
  </tr>
  <?php
    if (isset($_SESSION['cart'])) {
      # code...
    
  ?>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>Mexico</td>
    <td>Mexico</td>
    <td>Mexico</td>
  </tr>
  <?php
  }else{
  ?>

  <?php
  }?>
</table>