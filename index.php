<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/46a00fd641.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Trang chủ</title>
</head>

<body>
    <?php require 'menu.php' ?>
    <?php require 'content.php' ?>
    <?php require 'footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".btn-add-to-cart").click(function() {
                let id = $(this).data('id');
                $.ajax({
                        type: "GET",
                        url: "add_to_cart.php",
                        data: {
                            id
                        },
                    })
                    .done(function(response) {
                        if (response == 1) {
                            alert('Thêm sản phẩm thành công');
                        } else {
                            alert(response);
                        }
                    });
            });
        });
    </script>
</body>

</html>