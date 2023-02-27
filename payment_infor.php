<?php
  require_once "./database/config.php";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="./image/logoshop.png" type="image/icon type">
  <title>Nike Shop</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
  <?php
    session_start();
    ?>
<body>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
    s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/62b72f6bb0d10b6f3e794ac6/1g6dp2fhk';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
    <div class="container-fluid">
      <div class="row header">
        <div class="row head  ">
          <div class="col-12 nav-item dropdown nav-custom">
            <a class=" col-2 nav-link dropdown-toggle nav-custom" href="#" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-user"></i> 
              <?php
                 if (isset($_SESSION['name'])) {
                  echo $_SESSION['name'];
                  } else { 
                   echo 'Tài khoản';
                  }
              ?>
            </a>
            <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">
              <?php
              if (!isset($_SESSION['username'])) {
                echo '<a class="dropdown-item dropdown-item-custom" href="#">Đăng nhập</a>';
                echo '<div class="dropdown-divider margin: 3px 0;"></div>';
              }
              ?>
              <a class="dropdown-item dropdown-item-custom" href="#">Đăng Ký</a>
              <div class="dropdown-divider margin: 3px 0;"></div>
              <a class="dropdown-item dropdown-item-custom" href="#">Giỏ Hàng</a>
              <div class="dropdown-divider margin: 3px 0;"></div>
              <a class="dropdown-item dropdown-item-custom" href="#">Thanh Toán </a>
              <div class="dropdown-divider margin: 3px 0;"></div>
              <a class="dropdown-item dropdown-item-custom" href="#">Tra Cứu Đơn Hàng </a>
            </div>
          </div>
        </div>
        <?php
        $items = 0;
        if (isset($_SESSION['items']))
          $items = $_SESSION['items'];
        ?>
        <div class="row col-12 logo-search-cart">
          <div style="justify-content: end !important;" class="col-3 logo">
            <a href="./trangchu.php"><img width="30%" src="./image/logoshop.png" alt=""style="margin-left: 100px;margin-bottom: -40px"></a>
          </div>
          <div class="col-6">
            <div class="input-group mb-3 mt-3">
              <input type="text" class="form-control" placeholder="Nhập thông tin cần tìm"aria-label="Recipient's username"
                aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
          <div class="col-3 py-3 cart-icon">
            <p class="items-cart"><?php echo $items ?></p>
            <a href="./cart.php" style="color:#fff !important;"><i style="font-size: 24px !important;"
            class="fas fa-shopping-cart"></i></a>
          </div>
        </div>
        <div class="row col-12 mb-3">
          <ul style="margin: auto;" class="nav">
            <li class="nav-item"><a class="nav-link active nav-link-active-custom" href="./trangchu.php">Trang Chủ</a></li>
            <li class="nav-item"><a class="nav-link active nav-link-active-custom" href="#">Về Chúng Tôi</a></li>
            <li class="nav-item"><a class="nav-link active nav-link-active-custom" href="./index.php">Tất Cả Sản Phẩm</a></li>
            <li class="nav-item"><a class="nav-link active nav-link-active-custom" href="#">Hướng Dẫn Mua Hàng</a></li>
            <li class="nav-item"><a class="nav-link active nav-link-active-custom" href="./payment_infor.php ">Phương Thức Thanh Toán</a></li>
            <li class="nav-item"><a class="nav-link active nav-link-active-custom" href="./contact.php">Liên Hệ </a></li>
            <li class="nav-item"><a class="nav-link active nav-link-active-custom sale-off" href="#">Sale Off</a></li>
          </ul>
        </div>
            <!--END-Position-->
        </div>
    </div>
            <div class ="container-body">
                <h1>Phương thức thanh toán</h1>
                <p>
                Hình thức thanh toán áp dụng: Chuyển tiền/chuyển khoản
                Chuyển tiền/chuyển khoản:
                Khách hàng muốn mua sản phẩm cần chuyển khoản trước khi nhận hàng
                Thông tin tài khoản như sau:
                Tài Khoản Vietcombank
                CÔNG TY TNHH THỂ THAO SPORT1
                TK: 0011.0040.46877
                Ngân hàng TMCP Ngoại Thương Việt Nam – Sở Giao Dịch
                Tài khoản BIDV
                CÔNG TY TNHH THỂ THAO SPORT1
                TK: 2611.0000.085.726
                Ngân hàng Đầu Tư và Phát Triển Việt Nam –  CN Tràng An
                (Quý khách vui lòng gọi điện trước khi chuyển khoản để đảm bảo sản phẩm còn khi đặt mua. Liên hệ 0969.65.1313)
                </p>
            </div>
      <hr style="background-color: white; width: 100%;">
      <footer style="background-color: #333333 !important;" class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Links  -->
        <section class="" style="color: white">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3"></i> Nike Shop</h6>
                  <p>Rất hân hạnh được đem đến cho quý khách những sản phẩm tốt nhất với giá thành phải chăng</p>
              </div>
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Chuyên Sản Phẩm</h6>
                <p><a href="#!" class="text-reset">Quần Áo Thể Thao</a></p>
                <p><a href="#!" class="text-reset">Giày Thể Thao</a></p>
                <p> <a href="#!" class="text-reset">Phụ Kiện</a></p>
              </div>
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Liên Hệ</h6>
                <a href="https://www.facebook.com/finnofmene" class="me-4 text-reset"><i class="fab fa-facebook-f"></i></a>  
                <a href="mailto:huyngo9981@ggmail.com" class="me-4 text-reset"><i class="fab fa-google"></i></a>
                <a href="https://www.linkedin.com/in/ng%C3%B4-quang-huy-a5549624b/" class="me-4 text-reset"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Địa Chỉ</h6>
                <p><i class="fas fa-home me-3"></i> Việt Trì - Phú Thọ</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>  
        </section>
        <!-- Section: Links  -->
      </footer>                                                                                                                                                                                                                                              
      </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./utils/scripts.js"></script>
</body>
</html>