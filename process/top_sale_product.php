<?php
require_once('./database/connect.php');
$sql = "select * from san_pham where danh_muc=N'sale'";
$result = mysqli_query($connect, $sql);
?>