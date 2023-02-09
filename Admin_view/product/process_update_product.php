<?php
require_once "../../database/config.php";
$id = $_POST['product_id'];
$prd_categoryID = $_POST['prd_category'];
$prd_name = $_POST['prd_name'];
$prd_description = $_POST['prd_description'];
$prd_price = $_POST['prd_price'];
$prd_quantity = $_POST['prd_quantity'];
$prd_sale = $_POST['prd_sale'];
$prd_size = $_POST['prd_size'];
$prd_avatar = $_FILES['prd_avatar']['name'];
$prd_avatar_tmp = $_FILES['prd_avatar']['tmp_name'];
$path = '../upload/';
// move_uploaded_file($prd_avatar_tmp, $path . $prd_avatar);

$prd_sizeID = $_POST['prd_size'];
$sql = "UPDATE products
    SET
    category_id='$prd_categoryID',    
    product_name='$prd_name',
    product_description='$prd_description',
    product_price='$prd_price',
    product_quantity='$prd_quantity',
    product_sale='$prd_sale',
    product_image='$prd_avatar',
    size_name = '$prd_size'
    WHERE
    product_id = $id ";

$mysqli->query($sql);
move_uploaded_file($prd_avatar_tmp, $path . $prd_avatar);
echo '<script type="text/javascript">alert("Sửa sản phẩm thành công!!!");</script>';
header('location:../productList.php');
