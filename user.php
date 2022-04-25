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
    Xin chào, 
    <?php 
    echo $_SESSION['name']
    ?>. 
    <a href="signout.php">
        Đăng xuất
    </a>
    <ul>
        <li>
            <a href="update_info_user.php">
                Thay đổi thông tin
            </a>
        </li>
        <li>
            <a href="update_user_password.php">
                Thay đổi mật khẩu
            </a>
        </li>
    </ul>
</body>
</html>