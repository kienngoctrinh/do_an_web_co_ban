<?php require '../check_admin_login.php' ?>
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
    $order_id = $_GET['id'];
    require '../connect.php';
    $sql = "select * from order_product
    join products
    on products.id = order_product.product_id
    where order_id = '$order_id'";
    $result = mysqli_query($connect, $sql);
    $sum = 0;
    ?>
    <a href="index.php">
        Quay lại
    </a>
    <table border="1" width="100%">
        <tr>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Thông tin</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>
        <?php foreach ($result as $each) { ?>
            <tr>
                <td><?php echo $each['name'] ?></td>
                <td><img height="100" src="../products/photos/<?php echo $each['photo'] ?>"></td>
                <td><?php echo $each['price'] ?> đ</td>
                <td><?php echo $each['description'] ?></td>
                <td><?php echo $each['quantity'] ?></td>
                <td>
                    <?php
                    $result = $each['price'] * $each['quantity'];
                    echo $result;
                    $sum += $result;
                    ?> đ
                </td>
            </tr>
        <?php } ?>
    </table>
    <h1>Tổng tiền đơn này: <?php echo $sum ?> đ</h1>
</body>

</html>