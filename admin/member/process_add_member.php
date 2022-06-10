<?php require '../check_super_admin_login.php';

$namead = $_POST['namead'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

require '../connect.php';

$sql = "insert into admin(namead,email,password,level)
values('$namead','$email','$password','$level')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header("location:index.php");

