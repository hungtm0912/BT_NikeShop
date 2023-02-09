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
      <th style="border: 1px solid black;" scope="col">Title</th>
      <th style="border: 1px solid black;" scope="col">Price</th>
      <th style="border: 1px solid black;" scope="col">Category</th>
      <th style="border: 1px solid black;" scope="col">Quantity</th>
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