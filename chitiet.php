<?php
  require_once "./database/config.php";
  $product_idd;
  if(isset($_GET['id']))
    $product_idd = $_GET['id'];
  else
    $product_idd = $_POST["product_id"];
    $_SESSION["product_id"] = $product_idd;
  include('./utils/function.php');
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
  <link rel="stylesheet" href="./chitiet.css">
  <style>
  .cus_tag {
    text-align: left !important;
  }
  form button {
    margin: 5px 0px;
  }
  textarea {
    display: block;
    width: 100% !important;
    margin-bottom: 2px !important;
  }
  /*post*/
  .post {
    border: 1px solid #ccc;
    margin-top: 10px;
  }
  /*comments*/
  .comments-section {
    margin-top: 100px;
    border: 1px solid #ccc;
    /* background-color: white; */
    color: white;
    border: none;
  }
  .comment {
    margin-bottom: 10px;
  }
  .comment .comment-name {
    font-weight: bold;
  }
  .comment .comment-date {
    font-style: italic;
    font-size: 0.8em;
  }
  .comment .reply-btn,
  .edit-btn {
    font-size: 0.8em;
  }
  .comment-details {
    width: 91.5%;
    float: left;
  }
  .comment-details p {
    margin-bottom: 0px;
  }
  .comment .profile_pic {
    width: 35px;
    height: 35px;
    margin-right: 5px;
    float: left;
    border-radius: 50%;
  }
  /*replies*/
  .reply {
    margin-left: 30px;
  }
  .reply_form {
    margin-left: 40px;
    display: none;
  }
  #comment_form {
    margin-top: 10px;
  }
  #submit_comment {
    margin-bottom: 30px;
  }
  </style>
</head>
  <?php
    session_start();
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE product_id = $id";
    $product_sql = $mysqli->query($sql);
    $product = mysqli_fetch_array($product_sql);
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
  <div>
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
            <img width="20%" src="./image/logoshop.png" alt="">
          </div>
          <div class="col-6">
            <div class="input-group mb-3 mt-3">
              <input type="text" class="form-control" placeholder="Nhập thông tin cần tìm aria-label="Recipient's username"
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
            <li class="nav-item">
              <a class="nav-link active nav-link-active-custom" href="./trangchu.php">Trang Chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-active-custom" href="#">Về Chúng Tôi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-active-custom" href="./index.php">Tất Cả Sản Phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-active-custom" href="#">Hướng Dẫn Mua Hàng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-active-custom" href="#">Khách Hàng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-active-custom" href="#">Liên Hệ </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav-link-active-custom sale-off" href="#">Sale off</a>
            </li>
          </ul>
        </div>
      </div>
      <div style="margin-top: 200px;" class="container">
        <div class="row">
          <div class="col-4">
            <img width="350px" heigh="350px" src="./Admin_view/upload/<?php echo $product['product_image'] ?>" alt="">
          </div>
          <div class="col-8">
            <p class="name-product"><?php echo $product['product_name'] ?></p>
            <?php if ($product['product_sale'] > 0) { ?>
            <span class="card-text old-price"><?php echo number_format($product['product_price'])?>VND</span>
            <?php } else { ?>
            <span class="card-text old-price"></span>
            <?php } ?>
            <?php if ($product['product_sale'] > 0) { ?>
            <span style="margin-left: 20px; font-size: 30px" class="card-text new-price">
            <?php echo number_format($product['product_price'] - $product['product_price'] * $product['product_sale'] / 100)?>VND</span>
            <?php } else { ?>
            <span class="card-text new-price"> <?php echo $product['product_price'] ?> VND</span>
            <?php } ?>
            <p style="font-size: 18px; color: #fff;margin-bottom:0;font-weight: 600;">Mô Tả</p>
            <p class="product-desc"><?php echo $product['product_description'] ?></p>
            <p class="name-provider">Chọn Size</p>
            <!-- size button -->
            <?php
            $name =  $product['product_name'];
            $sql = "SELECT size_name FROM products WHERE product_name = '$name' ORDER BY size_name ASC";
            $ketqua = $mysqli->query($sql);
            ?>
            <div class="shoe size">
              <?php while ($row = mysqli_fetch_array($ketqua)) { ?>
              <div class="btn-group " role="group" aria-label="Third group">
                <button type="button" class="btn btn-info shoe-size-btn"
                  name="size"><?php echo $row['size_name'] ?></button>
              </div>
              <?php } ?>
              <!-- end size button -->
               <!-- Xet cac truong hop khi mua hang -->
              <div style="margin-top: 15px;">
                <button type="button" class="btn btn-outline-warning">Mua Hàng</button>
                <?php 
                 if (!isset($_SESSION['username'])) { ?>
                <button type="button" class="btn btn-outline-warning"><a class="add-product"
                 href="./signin">Thêm Vào Giỏ Hàng</a></button>
                <?php }
                 else { ?>
                <button type="button" class="btn btn-outline-warning"><a class="add-product" 
                 href="./add_to_cart.php?product_id=<?php echo $product['product_id'] ?>">Thêm vào Giỏ Hàng</a></button>
                <?php } ?>
              </div>
            </div>
            <!--END-Position-->
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