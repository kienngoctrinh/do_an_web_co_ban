<?php require '../check_super_admin_login.php';

$title = $_POST['title'];
$content = $_POST['content'];
$photo = $_FILES['photo'];

$folder = "photos/";
$file_extension = explode('.', $photo['name'])[1];
$file_name = time() . '.' . $file_extension;
$path_file = $folder . $file_name;

move_uploaded_file($photo["tmp_name"], $path_file);

require "../connect.php";

$sql = "insert into news(title,content,photo)
values('$title','$content','$file_name')";

mysqli_query($connect, $sql);
mysqli_close($connect);
