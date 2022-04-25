<?php 

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

require 'admin/connect.php';
$sql = "update customers
set
name = '$name',
phone = '$phone',
address = '$address'

where
id = '$id'";

mysqli_query($connect,$sql);
mysqli_close($connect);