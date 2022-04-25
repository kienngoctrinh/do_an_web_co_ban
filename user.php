<?php 
session_start();
if(empty($_SESSION['id'])){
    header('location:signin.php?error=Chưa đăng nhập');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Trang người dùng. Xin chào 
    <?php 
    echo $_SESSION['name']
    ?>
    <a href="signout.php">
        Đăng xuất
    </a>
</body>
</html>