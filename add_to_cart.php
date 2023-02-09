<?php
session_start();
$id = $_GET['product_id'];
if(empty($_SESSION['cart'][$id])){
    require_once "./database/config.php";
    $sql = "SELECT * FROM products WHERE product_id = $id";
    $result = $mysqli->query($sql);
    $each = mysqli_fetch_array($result);
    $_SESSION['cart'][$id]['image'] = $each['product_image'];
    $_SESSION['cart'][$id]['name'] = $each['product_name'];
    if($each['product_sale'] >0){
        $_SESSION['cart'][$id]['price'] = $each['product_price'] - $each['product_price']*$each['product_sale']/100;
    }else {
        $_SESSION['cart'][$id]['price'] = $each['product_price'];
    }
    $_SESSION['cart'][$id]['quantity'] = 1;
}else {
    $_SESSION['cart'][$id]['quantity'] ++;
}
header('location:./cart.php');