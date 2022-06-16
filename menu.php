<div class="navbar">
    <div class="top-bar">
        <div class="email">
            <i class="fa-solid fa-envelope"></i>
            <a href="#">shopbip@luadao.com</a>
        </div>
        <div class="phone">
            <i class="fa-solid fa-phone"></i>
            <a href="#">+84 12345 12345</a>
        </div>
    </div>
    <nav>
        <label class="logo">
            <a href="index.php" style="color: aqua;">SHOPBIP</a>
        </label>
        <ul>
            <li>
                <a href="view_news.php">
                    Tin tức
                </a>
            </li>
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
                    <a href="view_cart.php">
                        Xem giỏ hàng
                    </a>
                </li>
                <li>
                    <a href="user.php">Chào, <?php echo $_SESSION['name'] ?></a>
                </li>
                <li>
                    <a href="signout.php">
                        Đăng xuất
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</div>