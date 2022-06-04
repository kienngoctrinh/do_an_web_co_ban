<main>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="title">
                <ul class="list-items">
                    <?php if (empty($_SESSION['level'])) { ?>
                        <li>
                            <a href="../orders">
                                Quản lý đơn hàng
                            </a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a href="../products">
                                Quản lý sản phẩm
                            </a>
                        </li>
                        <li>
                            <a href="../orders">
                                Quản lý đơn hàng
                            </a>
                        </li>
                        <li>
                            <a href="../member">
                                Quản lý nhân viên
                            </a>
                        </li>
                        <li>
                            <a href="../news">
                                Quản lý bài đăng tin tức
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
</main>