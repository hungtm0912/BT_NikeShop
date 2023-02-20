<?php
    require_once "../../database/config.php";
    $id = $_GET['id'];
    $sqlxoa = "DELETE FROM `orders` WHERE order_id = '$id'";
    $mysqli->query($sqlxoa);
    echo '<script type="text/javascript">alert("Đơn Hàng Đã Xóa Thành Công");</script>';
    header("location:../saleOrderList.php");