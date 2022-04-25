<?php require '../check_super_admin_login.php' ?>
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
    $idad = $_GET['idad'];
    require '../connect.php';
    $sql = "select * from admin
    where idad = '$idad'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    ?>
    <form action="process_update_member.php" method="post">
        <input type="hidden" name="idad" value="<?php echo $each['idad'] ?>">
        <label>Tên</label>
        <input type="text" name="namead" value="<?php echo $each['namead'] ?>"><br>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $each['email'] ?>"><br>
        <label>Mật khẩu cũ</label>
        <input type="text" name="password" value="<?php echo $each['password'] ?>"><br>
        <label>Mật khẩu mới</label>
        <input type="password" name="password"><br>
        <button>Sửa</button>
    </form>
</body>

</html>