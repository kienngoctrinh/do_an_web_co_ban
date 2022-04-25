<?php 
session_start();
if(isset($_SESSION['id'])){
    header('location:user.php');
    exit;
}

if(isset($_COOKIE['remember'])){
    $token = $_COOKIE['remember'];
    require 'admin/connect.php';
    $sql = "select * from customers
    where token = '$token'
    limit 1";
    $result = mysqli_query($connect,$sql);
    $number_rows = mysqli_num_rows($result);
    if($number_rows == 1){
        $each = mysqli_fetch_array($result);
        $_SESSION['id'] = $each['id'];
        $_SESSION['name'] = $each['name'];
    }
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
    <form action="process_signin.php" method="post">
        <h1>Đăng nhập</h1>
        <label>Email</label>
        <input type="email" name="email" autocomplete="FALSE"><br>
        <label>Mật khẩu</label>
        <input type="password" name="password" autocomplete="FALSE"><br>
        <label>Ghi nhớ đăng nhập</label>
        <input type="checkbox" name="remember"><br>
        <button>Đăng nhập</button>
    </form>
</body>
</html>