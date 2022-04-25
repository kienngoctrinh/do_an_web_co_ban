<div class="navbar">
    <div class="top-bar">
        <div class="email">
            <i class="fa-solid fa-envelope"></i>
            <a href="#">kshop@gmail.com</a>
        </div>
        <div class="phone">
            <i class="fa-solid fa-phone"></i>
            <a href="#">+84 12345 12345</a>
        </div>
    </div>
    <nav>
        <label class="logo">
            <a href="index.php">KSHOP</a>
        </label>
        <ul>
            <?php if (empty($_SESSION['id'])) { ?>
                <li>
                    <a href="signin.php">
                        Đăng nhập
                    </a>
                </li>
                <li>
                    <a href="signup.php">
                        Đăng ký
                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <span class="span-cart">
                        <a href="view_cart.php">
                            Xem giỏ hàng (
                            <?php
                            $count = 0;
                            if (isset($_SESSION['cart'])) {
                                $count = count($_SESSION['cart']);
                            }
                            echo $count;
                            ?> )
                        </a>
                    </span>
                </li>
                <li>
                    <a href="user.php">Chào, <?php echo $_SESSION['name'] ?></a>
                    <a href="signout.php">
                        Đăng xuất
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</div>