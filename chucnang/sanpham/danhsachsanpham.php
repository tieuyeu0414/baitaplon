<?php
    $item = 8;
    $sql = "SELECT * FROM thietbigame LIMIT 8";
    $result = mysqli_query($connect, $sql);
    $sql1 = "SELECT * FROM thietbigame ";
    $result1 = mysqli_query($connect, $sql1);
    $row1 = mysqli_num_rows($result1);
    $totalPage = ceil($row1/$item);
?>


    <div class="title__main">
        <span style="font-weight: 500; color: rgb(160, 160, 175);"><a style="font-weight: 300; color: black;"
                href="index.php">Trang chủ</a></span>
        <h1 class="tilte__main-big">Trang chủ</h1>
        <p class="tilte__main-small"></p>
    </div>
    <div class="post__main">
        <?php
            while($row = mysqli_fetch_array($result)){
        ?>
        <div class="post__main-flex">
            <a href="index.php?page_layout=chitietsanpham&id=<?php echo $row['id']?>"><img src="image/<?php echo $row['img']?>" height="200px" alt="photo" style="object-fit: cover;"> </a>
            <div class="post__main-txt">
                <h2 class="mb-3"><a class="txt__post-link" href="index.php?page_layout=chitietsanpham&id=<?php echo $row['id']?>"><?php echo $row['name']?></a></h2>
                <p class="mb-3 txt__post-time">Màu: <?php echo $row['color']?></p>
                <p class="mb-3"> Giá: <span class="price-red"><?php echo $row['price']?><small>đ</small></span></p>
                <p class="mb-3"> Xuất xử: <?php echo $row['Origin']?></p>
                <p class="mb-3"> Hãng: <?php echo $row['trademark']?></p>
            </div>
        </div>
        <?php }?>
    </div>
    <br>
    <div class="pagination">
        <?php
            for($i = 1; $i <= $totalPage; $i++){
        ?>
            <a href="index.php?page_layout=phantrang&page=<?php echo $i?>"><?php echo $i?></a>
        <?php }?>
    </div>
