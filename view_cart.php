<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/46a00fd641.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_cart.css">
</head>

<body>
    <?php require 'menu.php' ?>
    <main>
        <div class="menu-home">
            <div class="menu-home-left">
            </div>
            <div class="menu-home-center">
                <div class="menu-home-top">
                    <p>Giỏ hàng của bạn</p>
                </div>
                <?php
                if (isset($_SESSION['cart'])) {
                    echo "<a href='index.php'>Đặt thêm sản phẩm</a>";
                    $cart = $_SESSION['cart'];
                    $sum = 0;
                    foreach ($cart as $id => $each) { ?>
                        <div class="menu-item-cart">
                            <div class="menu-item-cart-1">
                                <h4><?php echo $each['name'] ?></h4>
                                <img height="100" src="admin/products/photos/<?php echo $each['photo'] ?>">
                                <h4><?php echo $each['price'] ?> đ</h4>
                            </div>
                            <div class="menu-item-cart-2">
                                <h4 style="text-align: center;">Thông tin</h4>
                                <p><?php echo $each['description'] ?></p>
                            </div>
                            <div class="menu-item-cart-3">
                                <h4>Số lượng</h4>
                                <p>
                                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decre">
                                        -
                                    </a>
                                    <?php echo $each['quantity'] ?>
                                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=incre">
                                        +
                                    </a>
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
                            <div class="menu-item-cart-5">
                                <h4>Xóa sản phẩm</h4>
                                <p>
                                    <a href="delete_from_cart.php?id=<?php echo $id ?>">
                                        Xóa
                                    </a>
                                </p>
                            </div>
                            <div class="menu-item-bill">
                                <h2>
                                    Tổng tiền hóa đơn:
                                    <?php echo $sum ?> đ
                                </h2>
                                <?php
                                $id = $_SESSION['id'];
                                require 'admin/connect.php';
                                $sql = "select * from customers
                                where id = '$id'";
                                $result = mysqli_query($connect, $sql);
                                $each = mysqli_fetch_array($result);
                                ?>
                                <form action="process_checkout.php" method="post">
                                    <label>Tên người nhận</label>
                                    <input type="text" name="name_receiver" value='<?php echo $each['name'] ?>'><br>
                                    <label>Sđt người nhận</label>
                                    <input type="text" name="phone_receiver" value='<?php echo $each['phone'] ?>'><br>
                                    <label>Địa chỉ người nhận</label>
                                    <input type="text" name="address_receiver" value='<?php echo $each['address'] ?>'><br>
                                    <button>Đặt hàng</button>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else {
                    echo $_SESSION['error'] = 'Chưa có sản phẩm trong giỏ hàng. ';
                    echo "<a href='index.php'>Bấm vào đây để đặt sản phẩm</a>";
                } ?>
            </div>
            <div class="menu-home-right">
            </div>
            <div class="menu-home-bottom">
            </div>
        </div>
    </main>
    <?php require 'footer.php' ?>
</body>

</html>