<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/46a00fd641.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style_news.css">
</head>

<body>
    <?php

    require 'menu.php';
    require 'admin/connect.php';

    $sql = "select * from news";
    $result = mysqli_query($connect, $sql);

    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    $search = '';
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }

    $sql = "select count(*) from news 
    where
    title like '%$search%'";
    $each = mysqli_query($connect, $sql);
    $result = mysqli_fetch_array($each);
    $all_products = $result['count(*)'];

    $all_products_each_page = 5;
    $page_number = ceil($all_products / $all_products_each_page);
    $skip = $all_products_each_page * ($page - 1);

    $sql = "select * from news
    where
    title like '%$search%'
    limit $all_products_each_page offset $skip";
    $result = mysqli_query($connect, $sql);

    function to_slug($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }

    ?>

    <main>
        <div style="background-image: url('photos/banner.jpg');" class="banner"></div>
        <div class="menu-home">
            <div class="menu-home-top">
                <p>Tất cả tin tức</p>
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
                        <div class="menu-item-news-photo">
                            <img height="180" src="admin/news/photos/<?php echo $each['photo'] ?>">
                        </div>
                        <div class="menu-item-news-content">
                            <h2 style="text-align: left">
                            <?php 
                        
                            $str = $each['title'];
                            $slug = to_slug($str);                        

                            ?>
                                <a href="view_news_detail.php?id=<?php echo $each['id'] ?>?title=<?php echo $slug ?>">
                                    <?php echo $each['title'] ?>
                                </a>
                            </h2>
                            <p style="text-align: left">
                                <a href="view_news_detail.php?id=<?php echo $each['id'] ?>?title=<?php echo $slug ?>">
                                    <?php
                                    $str = $each['content'];
                                    $str2 = mb_substr($str, 0, 300);
                                    $str3 = $str2 . '...';
                                    echo $str3;
                                    ?>
                                </a>
                            </p>
                        </div>
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

    <?php require 'footer.php' ?>
</body>

</html>