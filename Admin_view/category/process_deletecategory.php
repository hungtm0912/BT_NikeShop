<?php
require_once "../../database/config.php";

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE category_id = $id";
$mang_sp = $mysqli->query($sql);
if ($mang_sp->num_rows > 0) {
    header("location:../categoryList.php?err_exist=Không Thể Xóa Do Đã Có Sản Phẩm Này!");
} else {
    $sqlxoa = "DELETE FROM `categories` WHERE category_id = $id";
    $mysqli->query($sqlxoa);
    header("location:../categoryList.php?remove_success=Xóa thành công");
}