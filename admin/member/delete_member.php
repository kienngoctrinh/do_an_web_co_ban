<?php require '../check_super_admin_login.php';

$idad = $_GET['idad'];
require '../connect.php';

$sql = "delete from admin
where idad = '$idad'";

mysqli_query($connect,$sql);
mysqli_close($connect);