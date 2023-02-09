<?php
require_once "../../database/config.php";
$id = $_POST['category_id'];
$categoryname = $_POST['category_name'];
$sql = "UPDATE categories
    SET
    category_name='$categoryname'
    WHERE
    category_id = $id ";
$mysqli->query($sql);
header('location:../categoryList.php');
