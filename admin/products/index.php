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
    require '../menu.php';
    require '../connect.php';
    $sql = "select * from products";
    $result = mysqli_query($connect,$sql);
    ?>
    <h1>Quản lý sản phẩm</h1>
    <a href="form_insert.php">
        Thêm sản phẩm
    </a>
    <table border="1" width="100%">
        <tr>
            <th>Mã</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Mô tả sản phẩm</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach($result as $each){ ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['name'] ?></td>
                <td>
                    <img height="150" src="photos/<?php echo $each['photo'] ?>">
                </td>
                <td><?php echo $each['price'] ?></td>
                <td><?php echo $each['description'] ?></td>
                <td>
                    <a href="form_update.php?id=<?php echo $each['id'] ?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $each['id'] ?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>