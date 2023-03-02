<?php
  require_once "./database/config.php";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nike Shop</title>
  <link rel="icon" href="./image/logoshop.png" type="image/icon type">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./uidonhang.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <?php
    $user_id = $_SESSION['user_id'];
    //đọc du liệu
    $order_id = 0;
    $result_1 = "";
    $sql = "SELECT * FROM orders  WHERE user_id = '$user_id' ORDER BY created_at DESC";
    $result = $mysqli->query($sql);
    
    ?>
  <div style=" max-width: 1350px; margin-top:45px; padding: 20px 0;" class="container">
    <div class="main-content" style="width:1200px; height: 550px;">
      <div class="row">
        <div class="col-lg-7">
          <div class="order-list">
            <h3>Danh Sách Đặt Hàng</h3>
            <ul class="list_donhang">
              <?php
                   while ($order = mysqli_fetch_array($result)) {
                    $order_id = $order['order_id'];
                    $status  = $order['status'];
                    $total = $order['total'];
                    $sql_1 = "SELECT * FROM products JOIN order_detail ON products.product_id = order_detail.product_id WHERE order_id = '$order_id'";
                    $result_1 = $mysqli->query($sql_1);
               ?>
              <li class="donhang_item">
                <a href="#" class="donhang_link"><h5>Chi Tiết Đơn Hàng</h5></a>
                <div class="product_list" style="position: relative; top: -25px;">
                  <table>
                    <?php
                      while ($row = mysqli_fetch_array($result_1)) {
                      $price = 0;
                      if ($row['product_sale'] > 0) {
                           $price = $row['product_price'] - $row['product_price'] * $row['product_sale'] / 100;
                      } else {
                           $price = $row['product_price'];
                      }
                           $price_order = $price * $row['quantity'];
                    ?>
                    <tr>
                      <td width="50%">
                        <p class="title"><?php echo $row['product_name'] ?></p>
                      </td>
                      <td width="10%">
                        <span class="soluong">Số Lượng <?php echo $row['quantity'] ?></span>
                      </td>
                      <td width="40%">
                        <span class="price">Giá<?php echo number_format($price_order) ?> VND</span>
                      </td>
                    </tr>
                    <?php } ?>
                  </table>
                </div>
                <div class="info-order">
                  <p class="total" style="margin-bottom:0;">Tổng: <?php echo number_format($total) ?>VND</p>
                  <p class="status" style="margin-bottom:0;">
                    <?php
                     if ($status == 1) {
                        echo "Đã giao hàng"; 
                     } else {
                        echo "Đang giao hàng";
                     }
                    ?> 
                  </p>
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="col-lg-5 contact">
          <div class="info-contact" style =" position: relative;left: -25px;top: 30px">
            <h3>Phản Hồi</h3>
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Tên Khách Hàng</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Tên">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1"> Thông Tin Phản Hồi</label>
                <textarea class="form-control" id="textarea" rows="6"></textarea>
              </div>
              <button type="submit" class="btnn" style="font-size:18px">Gửi</button>
            </form>
          </div>
        </div>
        <div class="back-to-shop" style="position: relative;left:55px;"><a href="./index.php"><i class="fas fa-long-arrow-left"></i> Quay Lại Shop</a></div>
      </div>
    </div>
  </div>
</body>
</html>