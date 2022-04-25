<?php
require 'admin/connect.php';

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

$all_products_each_page = 8;
$page_number = ceil($all_products / $all_products_each_page);
$skip = $all_products_each_page * ($page - 1);

$sql = "select * from products
where
name like '%$search%'
limit $all_products_each_page offset $skip";
$result = mysqli_query($connect, $sql);
?>

<main>
    <div style="background-image: url('photos/banner.jpg');" class="banner"></div>
    <div class="menu-home">
        <div class="menu-home-top">
            <p>Tất cả sản phẩm</p>
            <caption>
                <form>
                    Tìm kiếm
                    <input type="search" name="search" value="<?php echo $search ?>">
                </form>
            </caption>
        </div>
        <div class="menu-home-left">
        </div>
        <div class="menu-home-center">
            <?php foreach ($result as $each) { ?>
                <div class="menu-item">
                    <h3>
                        <?php echo $each['name'] ?>
                    </h3>
                    <img height="220" src="admin/products/photos/<?php echo $each['photo'] ?>">
                    <p style="color: black;">
                        <?php echo $each['price'] ?> đ
                    </p>
                    <?php if (!empty($_SESSION['id'])) { ?>
                        <button class="btn-add-to-cart" data-id="<?php echo $each['id'] ?>">
                            Thêm vào giỏ hàng
                        </button>
                    <?php } else { ?>
                        <p style="color: black;">Đăng nhập để đặt hàng</p>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="menu-home-right">
        </div>
        <div class="menu-home-bottom">
            <?php for ($i = 1; $i <= $page_number; $i++) { ?>
                <a href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
                    <?php echo $i ?>
                </a>
            <?php } ?>
        </div>
    </div>
</main>