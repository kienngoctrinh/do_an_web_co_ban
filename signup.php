<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <?php 
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
    <form action="process_signup.php" method="post">
        <h1>Đăng ký</h1>
        <label>Tên</label>
        <input type="text" name="name"><br>
        <label>Email</label>
        <input type="email" name="email"><br>
        <label>Mật khẩu</label>
        <input type="password" name="password"><br>
        <label>Số điện thoại</label>
        <input type="text" name="phone"><br>
        <label>Địa chỉ</label>
        <input type="text" name="address"><br>
        <button>Đăng ký</button>
    </form>
</body>
</html>