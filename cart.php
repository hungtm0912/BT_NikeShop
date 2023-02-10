<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: /PhuongNamSport/signin");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Nike Shop</title>
  <link type="text/css" rel="stylesheet" rel="stylesheet" href="./cart.css">
  <link type="text/css" rel="stylesheet" rel="stylesheet" href="./style.css">
  <link type="text/css" rel="stylesheet" href="path_to/simplePagination.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <!-- Common -->
  <div style="width: 0%; margin-left: -15px;" class="container-fluid">
    <!-- Header -->
    <?php
    $cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
    $total = 0;
    $_SESSION['items'] = 0;
    if (is_array($cart) || is_object($cart)) {
      foreach ($cart as $id => $each) :
        $total += $each['price'] * $each['quantity'];
        $_SESSION['items']++;
      endforeach;
    };
    include './includes/navbar.php';
    ?>
  </div>
  <div style="max-width: 1920px; margin-top: 200px;" class="container">
    <form action="process_checkout.php" method="post">
      <div style="margin:auto;" class="card">
        <div class="row">
          <div class="col-md-8 cart">
            <div class="title">
              <div class="row">
                <div class="col">
                  <h4>
                    <b>Shopping Cart</b>
                  </h4>
                </div>
              </div>
            </div>
            <?php
            $fullname = "";

            if (isset($_SESSION['name']))
              $fullname = $_SESSION['name'];
            ?>
            <div class="row border-top border-bottom cart-list">
              <?php
              if (is_array($cart) || is_object($cart)) {
                foreach ($cart as $id => $each) :
              ?>
              <div class="row main align-items-center">
                <div class="col-2">
                  <img class="img-fluid" src="./Admin_view/upload/<?php echo $each['image'] ?> ?>">
                </div>
                <div class="col-2">
                  <div class="row text-muted"></div>
                  <div class="row cus"><?php echo $each['name'] ?></div>
                </div>
                <div class="col-2">
                  <div class="row text-muted"></div>
                  <div class="row cus_padding"><?php echo number_format($each['price']) ?>đ</div>
                </div>
                <div class="col">
                  <a style="cursor: pointer; font-size: 20px; "
                    href="./update_quantity_in_cart.php?id=<?php echo $id ?>&type=giam">-</a>
                  <span id="" class="border"><?php echo $each['quantity'] ?></span>
                  <a style="cursor: pointer; font-size: 20px; "
                    href="./update_quantity_in_cart.php?id=<?php echo $id ?>&type=tang">+</a>
                </div>
                <div class="col">
                  <a style="margin-top: 0px; text-align:center !important; color: #fff;" type="button"
                    class="btnn btn-danger btn-cart" href="./delete_from_cart.php?id=<?php echo $id ?>">Xóa</a>
                </div>
              </div>
              <?php endforeach ?>
              <?php } ?>
            </div>

            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Thông Tin Khách Hàng</div>
            <div class="p-4">
              <div class="form-group">
                <label for="customerPhone">Tên Khách Hàng</label>
                <input type="tel" class="form-control" id="customerFullName" name="name_receiver"
                  placeholder="Full name" value="<?php echo $fullname ?>">
              </div>
              <div class="form-group">
                <label for="customerEmail">Địa chỉ Enmail</label>
                <input type="email" class="form-control" id="customerEmail" name="email_receiver"
                  placeholder="Enter email" value="<?php echo $_SESSION['email'] ?>">
                <small id="emailHelp" class="form-text text-muted"> Làm ơn không chia địa chỉ Email với bất cứ ai.</small>
              </div>
              <div class="form-group">
                <label for="customerPhone">Số Điện Thoại</label>
                <input type="tel" class="form-control" id="customerPhone" name="phone_receiver" placeholder="Phone"
                  value="<?php echo $_SESSION['phone'] ?>">
              </div>
              <div class="form-group">
                <label for="customerAddress">Địa chỉ</label>
                <input type="text" class="form-control" id="customerAddress" name="address_receiver"
                  placeholder="Address">
              </div>
            </div>
            <div class="back-to-shop">
              <a href="./index.php">&leftarrow;Quay lại Shop</a>
            </div>
          </div>
          <div class="col-md-4 summary">
            <div>
              <h5>
                <b>Tóm tắt</b>
              </h5>
            </div>
            <hr>
            <div class="row">
              <div class="col" style="padding-left: 0;"></div>

            </div>
            <form>
              <p>GIVE CODE</p>
              <input id="code" placeholder="Enter your code">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0, 0, 0, .1); padding: 2vh 0;">
              <div class="col">Tổng</div>
              <div class="col text-right">
                <span class="total-price"><?php echo number_format($total) ?>đ</span>
              </div>
            </div>
            <button type="submit" class="btnn" onclick="alert('Đặt hàng thành công');">ĐẶT HÀNG</button>
          </div>
        </div>
      </div>
    </form>

    <!-- Footer -->
    <footer style="background-color: #333333 !important;" class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
        <span>Liên hệ với chúng tôi qua những mạng xã hội sau:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset"> <i class="fab fa-facebook-f"></i>
          </a> <a href="" class="me-4 text-reset"> <i class="fab fa-google"></i>
          </a> <a href="" class="me-4 text-reset"> <i class="fab fa-instagram"></i>
          </a>

        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">i class="fas fa-gem me-3"></i> Nike Shop </h6>
              <p>Rất hân hạnh được đem đến cho quý khách những sản phẩm tốt nhất với giá thành phải chăng</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Products</h6>
              <p>
                <a href="#!" class="text-reset">Angular</a>
              </p>
              <p>
                <a href="#!" class="text-reset">React</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Vue</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Laravel</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
              <p><a href="#!" class="text-reset">Pricing</a></p>
              <p><a href="#!" class="text-reset">Settings</a></p>
              <p><a href="#!" class="text-reset">Orders</a> </p>
              <p><a href="#!" class="text-reset">Help</a> </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Thông Tin Liên Lạc</h6>
              <p><i class="fas fa-home me-3"></i> Việt Trì - Phú Thọ </p>
              <p><i class="fas fa-envelope me-3"></i> huyngo9981@gmail.com </p>
              <p><i class="fas fa-envelope me-3"></i> manhhungk18@gmail.com </p>
              <p><i class="fas fa-phone me-3"></i> 0978236082</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
      <!-- Copyright -->
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
</body>
<jsp:include page="/WEB-INF/view/khachhang/layout/js.jsp"></jsp:include>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="path_to/jquery.js"></script>
</html>