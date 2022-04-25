<?php require '../check_super_admin_login.php';

$idad = $_POST['idad'];
$namead = $_POST['namead'];
$email = $_POST['email'];
$password = $_POST['password'];

require '../connect.php';
$sql = "update admin
set
namead = '$namead',
email = '$email',
password = '$password'

where
idad = '$idad'";

mysqli_query($connect,$sql);
mysqli_close($connect);