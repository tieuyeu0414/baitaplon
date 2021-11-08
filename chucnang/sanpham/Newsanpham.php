<?php
    $sql = "SELECT * FROM thietbigame ORDER BY time DESC LIMIT 10";
    $result = mysqli_query($connect, $sql);
?>


    
    <ul class="highlight__main-list">
        <?php
            while($row = mysqli_fetch_array($result)){
        ?>
            <a href="index.php?page_layout=chitietsanpham&id=<?php echo $row['id']?>" class="hover">
                <li class="list__highlight-item">
                    <!-- <div class="number">
                        <h3><i>02</i></h3>
                    </div> -->
                    <p><?php echo $row['name']?></p>
                </li>
            </a>
        <?php }?>
        
    </ul>
