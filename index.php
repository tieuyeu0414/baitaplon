<?php
    // ob_start();
    // session_start();
    include_once('./connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./index.js"></script>
    <title>Tin Tức Anime</title>
</head>

<body>
    <?php 
        include_once('./views/header.php');
    ?>
    <div class="container">
        <?php
            include_once('./views/banner.php');
        ?>
        <div class="main">
            <div style="width: 100%; padding-right: 20px;">
                <?php
                    if(isset($_GET['page_layout'])){
                         switch($_GET['page_layout']){
                            case 'danhsachsanpham':
                                {
                                    include_once('./chucnang/sanpham/danhsachsanpham.php');
                                    break;  
                                }
                            case 'chitietsanpham':
                                {
                                    include_once('./chucnang/sanpham/chitietsanpham.php');
                                    break;  
                                }
                            case 'lienhe':
                                {
                                    include_once('./chucnang/lienhe/lienhe.php');
                                    break;  
                                }
                            case 'danhmuc':
                                {
                                    include_once('./chucnang/sanpham/danhmuc.php');
                                    break;  
                                }  
                            case 'timkiem':
                                {
                                    include_once('./chucnang/timkiem/timkiem.php');
                                    break;  
                                } 
                            case 'giohang':
                                {
                                    include_once('./chucnang/giohang/giohang.php');
                                    break;  
                                }  
                                case 'phantrang':
                                    {
                                        include_once('./chucnang/phantrang/phantrang.php');
                                        break;  
                                    }    
                            default: include_once('./chucnang/sanpham/danhsachsanpham.php');
                        }
                    }
                    else{
                        include_once('./chucnang/sanpham/danhsachsanpham.php');
                    }
                   
                    
                ?>
            </div>
            <div style="width: 100%;">
                <div class="highlight__main">
                    <div class="highlight__main-title">
                        <div style="background-color: rgb(236, 119, 4);" class="bg__highlight">
                            <p class="title__highlight-txt">Sản phẩm mới</p>
                        </div>
                        <div style="background-color: rgb(238, 238, 238);" class="bg__highlight"></div>
                    </div>
                    
                    <?php
                        include_once('./chucnang/sanpham/Newsanpham.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
        include_once('./views/footer.php')
    ?>
</body>

</html>