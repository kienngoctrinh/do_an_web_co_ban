<?php
try {
    session_start();
    // unset($_SESSION['cart']);
    $id = $_GET['id'];
    if (isset($_SESSION['cart'][$id])) {
        throw new Exception("Sản phẩm đã có trong giỏ hàng");
    }

    if (empty($_SESSION['cart'][$id])) {
        require 'admin/connect.php';
        $sql = "select * from products
        where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        $_SESSION['cart'][$id]['name'] = $each['name'];
        $_SESSION['cart'][$id]['photo'] = $each['photo'];
        $_SESSION['cart'][$id]['description'] = $each['description'];
        $_SESSION['cart'][$id]['price'] = $each['price'];
        $_SESSION['cart'][$id]['quantity'] = 1;
    } else {
        $_SESSION['cart'][$id]['quantity']++;
    }
    echo 1;
} catch (Throwable $th) {
    echo $th->getMessage();
}