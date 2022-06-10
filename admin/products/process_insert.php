<?php require '../check_super_admin_login.php';

$name = $_POST['name'];
$photo = $_FILES['photo'];
$price = $_POST['price'];
$description = $_POST['description'];

$folder = 'photos/';
$file_extension = explode('.',$photo['name'])[1];
$file_name = time().'.'.$file_extension;
$path_file = $folder.$file_name;

move_uploaded_file($photo["tmp_name"],$path_file);

require '../connect.php';

$sql = "insert into products(name,photo,price,description)
values('$name','$file_name','$price','$description')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header("location:index.php");