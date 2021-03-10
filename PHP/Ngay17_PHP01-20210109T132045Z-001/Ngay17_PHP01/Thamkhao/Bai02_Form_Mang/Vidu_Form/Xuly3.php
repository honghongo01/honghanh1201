<?php
// $_REQUEST[] dùng thay cho cả $_POST[] và $_GET[]
$tk  = $_REQUEST["taikhoan"];
$mk = $_REQUEST["matkhau"];
echo "<h3> Tài khoản: $tk </h3>";
echo "<h3> Mật khẩu: $mk </h3>";
?>