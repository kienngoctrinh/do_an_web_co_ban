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
    $id = $_GET['id'];
    require '../menu.php';
    require '../connect.php';
    $sql = "select * from products
    where id = '$id'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    ?>
    <form action="process_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
        <label>Tên sản phẩm</label>
        <input type="text" name="name" value="<?php echo $each['name'] ?>"><br>
        <label>Đổi ảnh mới</label>
        <input type="file" name="photo_new"><br>
        <label>Ảnh cũ</label>
        <img height="150" src="photos/<?php echo $each['photo'] ?>"><br>
        <input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>">
        <label>Giá</label>
        <input type="text" name="price" value="<?php echo $each['price'] ?>"><br>
        <label>Mô tả sản phẩm</label>
        <textarea name="description"><?php echo $each['description'] ?></textarea><br>
        <button>Sửa sản phẩm</button>
    </form>
</body>
</html>