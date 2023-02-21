<?php
require_once "../database/config.php";
$filename = "products_data.xls";
header('Content-Type: application/vnd.ms-excel; charset=vi');
header("Content-Disposition:attachment;filename=\"$filename\"");
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th style="border: 1px solid black;" scope="col">#</th>
      <th style="border: 1px solid black;" scope="col">Tiêu Đề</th>
      <th style="border: 1px solid black;" scope="col">Giá</th>
      <th style="border: 1px solid black;" scope="col">Loại</th>
      <th style="border: 1px solid black;" scope="col">Chất Lượng</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql_product = mysqli_query($mysqli, "SELECT * FROM `products`");
    $i = 1;
    while ($row_product = mysqli_fetch_array($sql_product)) {
    ?>
    <tr>
      <td style="border: 1px solid black;"><?php echo $i++; ?></td>
      <td style="border: 1px solid black;"><?php echo $row_product['product_name'] ?> </td>
      <td style="border: 1px solid black;"><?php echo $row_product['product_price'] ?> </td>
      <td style="border: 1px solid black;"><?php echo $row_product['category_id'] ?> </td>
      <td style="border: 1px solid black;"><?php echo $row_product['product_quantity'] ?> </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>