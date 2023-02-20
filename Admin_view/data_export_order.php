<?php
require_once "../database/config.php";
$filename = "orders_data.xls";
header('Content-Type: application/vnd.ms-excel; charset=vi');
header("Content-Disposition:attachment;filename=\"$filename\"");
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th style="border: 1px solid black;" scope="col">#</th>
      <th style="border: 1px solid black;" scope="col">Mã Mặt Hàng</th>
      <th style="border: 1px solid black;" scope="col">Tên Khách Hàng</th>
      <th style="border: 1px solid black;" scope="col">Địa Chỉ</th>
      <th style="border: 1px solid black;" scope="col">Số Điện Thoại</th>
      <th style="border: 1px solid black;" scope="col">Tổng</th>
      <th style="border: 1px solid black;" scope="col">Trạng Thái</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql_orders = mysqli_query($mysqli, "SELECT * FROM `orders`");
    ?>
    <?php
    $i = 1;
    while ($row_order = mysqli_fetch_array($sql_orders)) {
    ?>
    <tr id="boi-xam">
      <td style="border: 1px solid black;"><?php echo $i++ ?></td>
      <td style="border: 1px solid black;"><?php echo $row_order['order_id'] ?></td>
      <td style="border: 1px solid black;"><?php echo $row_order['name_receiver'] ?></td>
      <td style="border: 1px solid black;"><?php echo $row_order['address_receiver'] ?></td>
      <td style="border: 1px solid black;"><?php echo $row_order['phone_receiver'] ?></td>
      <td style="border: 1px solid black;"><?php echo number_format($row_order['total']) ?> VND</td>
      <td style="border: 1px solid black;">
        <?php
          if ($row_order['status'] == 1)
            echo "Đã giao hàng";
          else
            echo "Đang giao hàng";
          ?>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>