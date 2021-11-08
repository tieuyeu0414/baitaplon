<?php
    $sql = "SELECT * FROM danhmuc";
    $result = mysqli_query($connect, $sql);
?>


<div class="header">
        <div class="container">
            <div class="logo__header">
                <img src="image/logo-moi.png" alt="logo"/>
                <div style="display: flex; align-items: center">
                    <a href="index.php?page_layout=giohang" class="giohang"><button>Giỏ hàng</button></a>
                    <?php
                        session_start();
                        if (!isset($_SESSION['user'])) {
                            header("location:./chucnang/dangnhap_dangky/index.php");
                        } else {
                            echo '<h3 style="margin-right: 15px">'.$_SESSION['user'].'</h3>';
                        }
                    ?>
                    <a href="./chucnang/dangnhap_dangky/logout.php"><button class="btn-logout">Đăng xuất</button></a>
                </div>
            </div>
        </div>
        <div class="menu__header">
            <div class="container">
                <div class="flex">
                    <ul class="menu__header-menu">
                        <li class="menu__item">
                            <a href="index.php" class="menu__item-link">Trang chủ</a>
                        </li>
                        <li class="menu__item">
                            <a href="index.php?page_layout=lienhe" class="menu__item-link">Liên hệ</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__item-link">Danh mục</a>
                            
                            <ul class="menu__item-child">
                                <?php
                                    while($row = mysqli_fetch_array($result)){
                                ?>
                                <li class="menu__item">
                                    <a href="index.php?page_layout=danhmuc&nhanbiet=<?php echo $row['nhanbiet']?>&name=<?php echo $row['name']?>" class="menu__item-link menu__item-link_child"><?php echo $row['name']?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                    <div class="menu__header-search">
                        <form action="index.php?page_layout=timkiem" method="POST">
                            <input type="search" name="search" class="search__input" placeholder="Tìm kiếm...">
                            <button type="submit" name="submit">tìm kiếm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
