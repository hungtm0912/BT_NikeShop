<?php
require_once "./database/config.php";
$name_receiver = $_POST['name_receiver'];
$email_receiver = $_POST['email_receiver'];
$phone_receiver = $_POST['phone_receiver'];
$address_receiver = $_POST['address_receiver'];
session_start();
$cart = $_SESSION['cart'];
//luu vao order
$username = $_SESSION['username'];
$sql_user = "SELECT * FROM users WHERE username = '$username'";
$mang_user = $mysqli->query($sql_user);
$user_id = 0;
if (isset($mang_user)) {
    $each = mysqli_fetch_array($mang_user);
    $user_id = $each['user_id'];
}
$status = 0;
$total_price = 0;
foreach ($cart as $each) {
    $total_price += $each['quantity'] * $each['price'];
}
$sql = "INSERT INTO orders(user_id,name_receiver,phone_receiver,address_receiver,total,status)
VALUES ('$user_id','$name_receiver','$phone_receiver','$address_receiver','$total_price','$status')";
$mysqli->query($sql);

//luu vao order detail
$sql = "SELECT MAX(order_id) FROM orders WHERE user_id = '$user_id'";
$result = $mysqli->query($sql);
$order_id = mysqli_fetch_array($result)['MAX(order_id)'];
foreach ($cart as $product_id => $each) {
    $quantity = $each['quantity'];
    $sql = "INSERT INTO order_detail(order_id,product_id,quantity)
    VALUES ('$order_id','$product_id','$quantity')";
    $mysqli->query($sql);
}
$mysqli->close();
unset($_SESSION['cart']);
unset($_SESSION['items']);
header('location:./index.php');