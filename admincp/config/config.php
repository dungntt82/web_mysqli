<?php
$mysqli = new mysqli("localhost","root","","web_mysqli");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Kết nối cơ sở dữ liệu bị lỗi: " . $mysqli -> connect_error;
  exit();
}
?>