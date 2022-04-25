<?php require '../check_admin_login.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style_cart.css">
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
    <main>
        <div class="menu-home-center">
            <?php
            foreach ($result as $each) { ?>
                <div style="height: 240px;" class="menu-item-cart">
                    <div class="menu-item-cart-1">
                        <h4><?php echo $each['name'] ?></h4>
                        <img height="100" src="../products/photos/<?php echo $each['photo'] ?>">
                        <h4><?php echo $each['price'] ?> đ</h4>
                    </div>
                    <div class="menu-item-cart-2">
                        <h4 style="text-align: center;">Thông tin</h4>
                        <p><?php echo $each['description'] ?></p>
                    </div>
                    <div class="menu-item-cart-3">
                        <h4>Số lượng</h4>
                        <p>
                            <?php echo $each['quantity'] ?>
                        </p>
                    </div>
                    <div class="menu-item-cart-4">
                        <h4>Tổng tiền</h4>
                        <p>
                            <?php
                            $result = $each['price'] * $each['quantity'];
                            echo $result;
                            $sum += $result;
                            ?> đ
                        </p>
                    </div>
                </div>
            <?php } ?>
            <h1>
                Tổng tiền đơn này: <?php echo $sum ?> đ
            </h1>
        </div>
    </main>
</body>

</html>