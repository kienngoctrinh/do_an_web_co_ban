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
    require '../connect.php';
    $sql = "select * from admin
    where level = '0'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    ?>
    <h1>Quản lý nhân viên</h1>
    <ul>
        <li>
            <a href="add_member.php">
                Thêm nhân viên
            </a>
        </li>
    </ul>
    <table border="1" width="100%">
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($result as $each) { ?>
            <tr>
                <td><?php echo $each['idad'] ?></td>
                <td><?php echo $each['namead'] ?></td>
                <td><?php echo $each['email'] ?></td>
                <td><?php echo $each['password'] ?></td>
                <td>
                    <a href="update_member.php?idad=<?php echo $each['idad'] ?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="delete_member.php?idad=<?php echo $each['idad'] ?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>