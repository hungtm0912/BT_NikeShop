<?php
require_once "../../database/config.php";
$ten = $_POST['category_name'];
$sqlthemdanhmuc = "INSERT INTO `categories`(category_name) VALUES ('$ten')";
$mysqli->query($sqlthemdanhmuc);
header('location:../categoryList.php');
