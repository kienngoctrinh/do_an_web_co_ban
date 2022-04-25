<?php 

$id = $_POST['id'];
$password = $_POST['password'];

require 'admin/connect.php';
$sql = "update customers
set
password = '$password'

where
id = '$id'";

mysqli_query($connect,$sql);
mysqli_close($connect);