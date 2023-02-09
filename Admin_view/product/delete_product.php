<?php
    require_once "../../database/config.php";
    $id = $_GET['id'];
    $sqlxoa = "DELETE FROM `products` WHERE product_id = '$id'";
    $mysqli->query($sqlxoa);
    echo '<script type="text/javascript">alert("Xóa sản phẩm thành công!!!");</script>';
    header("location:../productList.php");