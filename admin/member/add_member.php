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
    <form action="process_add_member.php" method="post">
        <h1>Thêm nhân viên</h1>
        <label>Tên</label>
        <input type="text" name="namead"><br>
        <label>Email</label>
        <input type="email" name="email"><br>
        <label>Mật khẩu</label>
        <input type="password" name="password"><br>
        <select name="level">
            <option value="0">Nhân viên</option>
        </select><br>
        <button>Thêm</button>
    </form>
</body>
</html>