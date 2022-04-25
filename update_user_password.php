<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_SESSION['id'];
    require 'admin/connect.php';
    $sql = "select * from customers
    where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    ?>
    <h1>Thay đổi mật khẩu</h1>
    <form action="process_update_user_password.php" method="post">
        <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
        <label>Mật khẩu cũ</label>
        <input type="text" name="password" value='<?php echo $each['password'] ?>'><br>
        <label>Mật khẩu mới</label>
        <input type="password" name="password"><br>
        <button>Thay đổi mật khẩu</button>
    </form>
</body>

</html>