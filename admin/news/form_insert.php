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
        <label>Tiêu đề</label>
        <input type="text" name="title"><br>
        <label>Nội dung</label>
        <textarea name="content"></textarea><br>
        <label>Ảnh</label>
        <input type="file" name="photo"><br>
        <button>Thêm bài tin tức</button>
    </form>
</body>
</html>