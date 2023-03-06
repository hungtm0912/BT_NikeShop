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
    <?php
    include './includes/navbar.php';
    ?>
  </div>
     <div class ="container-body" style="margin-top: 190px;color: white; margin-left: 260px;">
      <h1>Phương Thức Thanh Toán</h1>
      <p>Hình thức thanh toán được áp dụng: Chuyển Khoản /QR /IPAY /CREDIT CARD</p>
      <p>Khách hàng muốn mua sản phẩm cần chuyển khoản trước khi nhận hàng</p>
      <p>Thông tin tài khoản như sau:</p>
      <h5>Ngân Hàng Viettinbank</h5>
      <p>NGO QUANG HUY</p>
      <strong>Số TK: 100872547325</strong>
      <p>Ngân hàng Thương mại Cổ phần Công thương Việt Nam</p>
      <h5>Ngân Hàng Viettinbank</h5>
      <p>TA MANH HUNG</p>
      <strong>Số TK: 102872547323</strong>
      <p>Ngân hàng Thương mại Cổ phần Công thương Việt Nam</p>
      <p>(Quý khách vui lòng gọi điện trước khi chuyển khoản để đảm bảo sản phẩm còn khi đặt mua. Liên hệ 0978236082)
       </p>
    </div>
      <hr style="background-color: white; width: 100%;">
      <footer style="background-color: #333333 !important;" class=" text-center text-lg-start bg-light text-muted">
        <section class="" style="color: white">
          <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3"></i> Nike Shop</h6>
                  <p>Rất hân hạnh được đem đến cho quý khách những sản phẩm tốt nhất với giá thành phải chăng</p>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Chuyên Sản Phẩm</h6>
                <p><a href="#!" class="text-reset">Quần Áo Thể Thao</a></p>
                <p><a href="#!" class="text-reset">Giày Thể Thao</a></p>
                <p> <a href="#!" class="text-reset">Phụ Kiện</a></p>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Liên Hệ</h6>
                <p><a href="https://www.facebook.com/finnofmene" class="me-4 text-reset"><i class="fab fa-facebook-f"></i></a></p>
                <p><a href="mailto:huyngo9981@ggmail.com" class="me-4 text-reset"><i class="fab fa-google"></i></a></p>
                <p><a href="https://www.linkedin.com/in/ng%C3%B4-quang-huy-a5549624b/" class="me-4 text-reset"><i class="fab fa-linkedin-in"></i></a></p>
              </div>
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Địa Chỉ</h6>
                <p><i class="fas fa-home me-3"></i> Việt Trì - Phú Thọ</p>
              </div>
            </div>
          </div>
        </section>
      </footer>                                                                                                                                                                                                                                             
      </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./utils/scripts.js"></script>
</body>
</html>