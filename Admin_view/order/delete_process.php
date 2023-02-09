<?php
    require_once "../../database/config.php";
    $id = $_GET['id'];
    $sqlxoa = "DELETE FROM `orders` WHERE order_id = '$id'";
    $mysqli->query($sqlxoa);
    echo '<script type="text/javascript">alert("Xóa đơn hàng thành công!!!");</script>';
    header("location:../saleOrderList.php");