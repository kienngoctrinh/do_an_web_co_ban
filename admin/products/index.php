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
    $result = mysqli_query($connect, $sql);

    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    $search = '';
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }

    $sql = "select count(*) from products 
    where
    name like '%$search%'";
    $each = mysqli_query($connect, $sql);
    $result = mysqli_fetch_array($each);
    $all_products = $result['count(*)'];

    $all_products_each_page = 4;
    $page_number = ceil($all_products / $all_products_each_page);
    $skip = $all_products_each_page * ($page - 1);

    $sql = "select * from products
    where
    name like '%$search%'
    limit $all_products_each_page offset $skip";
    $result = mysqli_query($connect, $sql);
    ?>
    <h1>Quản lý sản phẩm</h1>
    <a href="form_insert.php">
        Thêm sản phẩm
    </a>
    <table border="1" width="100%">
        <caption>
            <form>
                Tìm kiếm
                <input type="search" name="search" value="<?php echo $search ?>">
            </form>
        </caption>
        <tr>
            <th>Mã</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Mô tả sản phẩm</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php foreach ($result as $each) { ?>
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
    <?php for ($i = 1; $i <= $page_number; $i++) { ?>
        <a href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
            <?php echo $i ?>
        </a>
    <?php } ?>
</body>

</html>