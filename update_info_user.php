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
    <h1>Thay đổi thông tin</h1>
    <form action="process_update_info_user.php" method="post">
        <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
        <label>Tên</label>
        <input type="text" name="name" value='<?php echo $each['name'] ?>'><br>
        <label>Số điện thoại</label>
        <input type="text" name="phone" value='<?php echo $each['phone'] ?>'><br>
        <label>Địa chỉ</label>
        <input type="text" name="address" value='<?php echo $each['address'] ?>'><br>
        <button>Sửa thông tin</button>
    </form>
</body>

</html>