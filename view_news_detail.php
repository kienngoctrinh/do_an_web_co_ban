<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/46a00fd641.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style_news_detail.css">
</head>

<body>
    <?php

    $id = $_GET['id'];
    require 'menu.php';
    require 'admin/connect.php';

    $sql = "select * from news
    where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);

    ?>

    <main>
        <div style="background-image: url('photos/banner.jpg');" class="banner"></div>
        <div class="menu-home">
            <div class="menu-home-top">
                <p>Chi tiết bài viết</p>
            </div>
            <div class="menu-home-left">
            </div>
            <div class="menu-home-center">
                <h1 style="font-size: 50px;"><?php echo $each['title'] ?></h1>
                <div class="menu-home-center-photo">
                    <img height="450px" src="admin/news/photos/<?php echo $each['photo'] ?>">
                </div>
                <div class="menu-home-center-content">
                    <p style="text-align: left;"><?php echo nl2br($each['content']) ?></p>
                </div>
            </div>
            <div class="menu-home-right">
            </div>
        </div>
    </main>

    <?php require 'footer.php' ?>
</body>

</html>