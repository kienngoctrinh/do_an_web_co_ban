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
    <form action="process_insert.php" method="post" enctype="multipart/form-data">
        <label>Tên sản phẩm</label>
        <input type="text" name="name"><br>
        <label>Ảnh</label>
        <input type="file" name="photo"><br>
        <label>Giá</label>
        <input type="text" name="price"><br>
        <label>Mô tả sản phẩm</label>
        <textarea name="description"></textarea><br>
        <button>Thêm sản phẩm</button>
    </form>
</body>
</html>