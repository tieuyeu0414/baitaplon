<?php
include_once('../../connect.php');
    $id_giohang = $_GET['id_giohang'];
    $sql = "DELETE FROM `order` WHERE `order`.`id` = '$id_giohang'";
    $result = mysqli_query($connect, $sql);
    header('location: ../../index.php?page_layout=giohang');
?>