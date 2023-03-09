<?php
  require_once './database/config.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nike Shop</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="icon" href="./image/logoshop.png" type="image/icon type">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</head>
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
  <?php
  $search = "";
  if (isset($_GET['search'])) {
    $search = strtoupper($_GET['search']);
    header("location:./index.php?search=$search");
  }
  ?>
  <div class="container-fluid">
    <?php
    include './includes/navbar.php';
    ?>
    <!--slide-->
    <div style="margin-top: 154px;" class="row slide">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./image/slideshow_2.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./image/slideshow_3.png" alt="Second slide">
          </div> 
          <div class="carousel-item">
            <img class="d-block w-100" src="./image/slideshow_4.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <br>
  <div style="margin:20px auto; text-align:center;font-size:30px;font-weight:700;color:white;position:relative;top:30px;">SẢN PHẨM HOT</div>
  <!--slide product-->
  <div class="container slide-product">
    <div class="row">
      <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
        <div class="MultiCarousel-inner">
          <?php
          $sql_product = mysqli_query($mysqli, "SELECT * FROM `products` WHERE `product_sale` != 0 ");
          ?>
          <?php
          while ($row_product = mysqli_fetch_array($sql_product)) {
          ?>
          <div class="item">
            <div style="padding: 0 0;" class="pad15">
              <div style="margin-bottom: 10px !important; background-color:#333333!important;" class="card ">
                <span class="ico-sale" style="display: inline-block;background-color: #ff0000;position: absolute;
                width: 45px;color: white;font-size: 13px;text-align: center;right: 3%;top: 5px;">-<?php echo $row_product['product_sale'] ?>%</span>
                <a href="./chitiet.php?id=<?php echo $row_product['product_id'] ?>"><img style="height: 200px;" class="card-img-top link" 
                  src="./Admin_view/upload/<?php echo $row_product ['product_image'] ?>"  alt="Card image cap"></a>
                <div style="padding: 0 1px !important;" class="card-body">
                  <a style="color: orange;" class="card-title product-title"
                    href="./chitiet.php?id=<?php echo $row_product['product_id'] ?>"><?php echo $row_product['product_name'] ?></a>
                  <br>
                  <span class="card-text old-price"><?php echo number_format($row_product['product_price']) ?>VND</span>
                  <span
                    class="card-text new-price"><?php echo number_format($row_product['product_price'] - ($row_product['product_sale'] / 100 * $row_product['product_price'])) ?>đ</span>
                </div>
              </div>
            </div>
          </div>
          <?php
          } ?>
        </div>
        <button style="background-color: white; color: black" class="btn btn-primary leftLst">
        <i class="fa-solid fa-chevron-left"></i></button>
        <button style="background-color: white; color: black" class="btn btn-primary rightLst">
        <i class="fa-solid fa-chevron-right"></i></button>
      </div>
    </div>
    <!--NEW PRODUCT-->
    <div style="margin: 20px auto; text-align: center; font-size:30px; font-weight:700; color: white;position:relative; top: 35px;"> SẢN PHẨM MỚI</div>
    <div class="row">
      <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
        <div class="MultiCarousel-inner">
          <?php
          $sql_product = mysqli_query($mysqli, "SELECT * FROM `products` GROUP BY product_name");
          ?>
          <?php
          while ($row_product = mysqli_fetch_array($sql_product)) {
          ?>
          <div class="item">
            <div style="padding: 0 0;" class="pad15 ">
              <div style="margin-bottom: 10px !important; background-color:#333333!important;" class="card ">
              <span class="ico-sale" style="display: inline-block;background-color: #ff0000;position: absolute;
                width: 45px;color: white;font-size: 13px;text-align: center;right: 3%;top: 5px;">-<?php echo $row_product['product_sale'] ?>%</span>
                <a href="./chitiet.php?id=<?php echo $row_product['product_id'] ?>"><img style="height: 200px;" class="card-img-top link"
                  src="./Admin_view/upload/<?php echo $row_product['product_image'] ?>"  alt="Card image cap" ></a>
                <div style="padding: 0 1px !important;" class="card-body">
                  <a style="color: orange;" class="card-title product-title"
                    href="./chitiet.php?id=<?php echo $row_product['product_id'] ?>"><?php echo $row_product['product_name'] ?></a>
                  <br>
                  <span class="card-text old-price"><?php echo number_format($row_product['product_price']) ?>VND</span>
                  <span
                    class="card-text new-price"><?php echo number_format($row_product['product_price'] - ($row_product['product_sale'] / 100 * $row_product['product_price'])) ?>đ</span>
                </div>
              </div>
            </div>
          </div>
          <?php
          } ?>
        </div>
        <button style="background-color: white; color: black" class="btn btn-primary leftLst">
        <i class="fa-solid fa-chevron-left"></i></button>
        <button style="background-color: white; color: black" class="btn btn-primary rightLst">
        <i class="fa-solid fa-chevron-right"></i></button>
      </div>
    </div>
    <!--WHAT FIND?-->
    <div style="margin: 20px auto; text-align: center; font-size:30px; font-weight:700; color: white;position:relative; top: 50px"> 
      BẠN ĐANG TÌM?</div>
    <div class="container type-of-product">
      <div class=" box">
        <img height="350px !important" src="./product_for_image/for_man.png">
        <span>Sản Phẩm Cho Nam</span>
      </div>
      <div class=" box">
        <img height="150px !important" src="./product_for_image/for_woman.png">
        <span>Sản Phẩm Cho Nữ</span>
      </div>
      <div class=" box">
        <img height="150px !important" src="./product_for_image/for_kid.png">
        <span>Sản Phẩm Cho Trẻ Em</span>
      </div>
    </div>
    <!--GENERATION-->
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin-top: 350px;">
          <div class="gene_item">
            <div class="gene_img"><img src="./product_for_image/new_gen.png" alt=""></div>
            <div class="gene_info">
              <h2 class="gene_title">A New Genaration</h2>
              <p class="gene_desc">Náo nhiệt và táo bạo nhưng luôn cởi mở - sáng tạo</p>
              <button class="gene_button btn btn-secondary">MUA NGAY</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin-top: 350px;">
          <div class="gene_item">
            <div class="gene_img"><img src="./product_for_image/nrc.png" alt=""></div>
              <div class="gene_info">
                <h2 class="gene_title">Let’s Run Together</h2>
                <p class="gene_desc">Running is just better with a crew. Create Challenges like!</p>
                <button class="gene_button btn btn-secondary">MUA NGAY</button>
              </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <!--BEST OF Nike-->
    <div style="margin: 20px auto; text-align: center; font-size:30px; font-weight:700; color: white;">BEST SELLER</div>
    <div style="margin-bottom: 2px !important;" class="container">
      <div class="row">
         
        <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 best">
          <div class="best_item">
            <img height="150px !important" src="./product_img/air-1.png">
            <a class="best_title product-title" href="./chitiet.php?id=<?php echo $row_product['product_id'] ?>">Nike Air Force 1 '07</a>
            <p class="price_bestitem">3,519,000 VND</p>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
          <div class="best_item">
            <img height="150px !important" src="./product_img/air-jordan-1-elevate-low.png">
            <a class="best_title product-title" href="./chitiet.php?id=<?php echo $row_product['product_id'] ?>">Air Jordan 1 Elevate Low</a>
            <p class="price_bestitem">3,254,649 VND</p>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
          <div class="best_item">
            <img height="150px !important" src="./product_img/air-jordan-1-zoom.png">
            <a class="best_title product-title" href="./chitiet.php?id=<?php echo $row_product['product_id'] ?>">Air Jordan 1 Zoom Comfort</a>
            <p class="price_bestitem">4,109,000 VND</p>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
          <div class="best_item">
            <img height="150px !important" src="./product_img/jumpman-two-trey.png">
            <a class="best_title product-title" href="./chitiet.php?id=<?php echo $row_product['product_id'] ?>">Jumpman Two Trey</a>
            <p class="price_bestitem">4,409,000 VND</p>
          </div>
        </div>
      </div>
    </div>
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
                <p><i class="fas fa-home me-3"></i> Ngõ 142 - Thanh Miếu<br> &ensp;  Việt Trì - Phú Thọ</p>
              </div>
            </div>
          </div>
        </section>
        <button onclick="topFunction()" id="myBtn" title="Back to top"><i class="fal fa-arrow-alt-to-top"></i></button>
        <script>
              // Get the button
              let mybutton = document.getElementById("myBtn");
              // When the user scrolls down from the top of the document, show the button
              window.onscroll = function() {scrollFunction()};
              function scrollFunction() {
                if (document.body.scrollTop > 2850 || document.documentElement.scrollTop > 2850) {
                  mybutton.style.display = "block";
                } else {
                  mybutton.style.display = "none";
                }
              }
              // When the user clicks on the button, scroll to the top of the document
              function topFunction() {
                //document.body.scrollTop = 0;
                //document.documentElement.scrollTop = 0;
                //$('html, body').animate({scrollTop:0}, 'slow');
                $("html, body").animate({scrollTop: 0}, );
              }
         </script>
      </footer>
    </div>
  </div>
<style>  
.box {
    flex: 1;
    overflow: hidden;
    transition: 0.5s;
    margin: 0 2%;
    box-shadow: 0 20px 30px rgba(236, 139, 27, 1);
    line-height: 0;
    border-radius: 10px;
    height: 500px;
}
.box > img {
    width: 100%;
    height: calc(100% - 5vh);
    object-fit: cover;
    transition: 0.5s;
}
.box > span {
    font-size: 2.8vh;
    display: block;
    text-align: center;
    height: 10vh;
    line-height: 1.2;
    color: orange;
    background-color: #333333;
}
.box:hover {
    flex: 1 1 25%;
    height: 500px;
    object-fit: cover;
    transition: 0.5s;
}
.box:hover > img {
    width: 100%;
    height: 550px;
}
#myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 90px;
    z-index: 99;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 15px;
    border-radius: 10px;
}
#myBtn:hover {
    background-color:#FF9800;
}
</style>
  <script src="./script.js"></script>
</body>
</html>