<?php
require_once './database/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="./image/logoshop.png" type="image/icon type">
    <title>Nike Shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <div class = "layout">
    <div class="container-fluid">
        <div class="row header">
            <div class="row head  ">
                <div class="col-12 nav-item dropdown nav-custom">
                    <a class=" col-2 nav-link dropdown-toggle nav-custom" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user"></i> Tài khoản
                    </a>
                    <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item dropdown-item-custom" href="./signup">Đăng ký</a>
                        <div class="dropdown-divider margin: 3px 0;"></div>
                        <a class="dropdown-item dropdown-item-custom" href="./signin">Đăng nhập</a>
                        <div class="dropdown-divider margin: 3px 0;"></div>
                        <a class="dropdown-item dropdown-item-custom" href="#">Giỏ hàng</a>
                        <div class="dropdown-divider margin: 3px 0;"></div>
                        <a class="dropdown-item dropdown-item-custom" href="#">Thanh toán </a>
                        <div class="dropdown-divider margin: 3px 0;"></div>
                        <a class="dropdown-item dropdown-item-custom" href="#">Tra cứu đơn hàng </a>
                        <div class="dropdown-divider margin: 3px 0;"></div>
                        <a class="dropdown-item dropdown-item-custom" href="./signout">Đăng xuất </a>
                    </div>
                </div>
            </div>

            <div class="row col-12 logo-search-cart">
                <div style="justify-content: end !important;" class="col-3 logo">
                    <img width="20%" src="./image/logoshop.png" alt="">
                </div>
                <div class="col-6">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-3 py-3">
                    <i style="font-size: 24px !important;" class="fas fa-shopping-cart"></i>
                </div>
            </div>

            <div class="row col-12 mb-3">
                <ul style="margin: auto;" class="nav ">
                    <li class="nav-item">
                        <a class="nav-link active nav-link-active-custom" href="./trangchu.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-active-custom" href="#">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-active-custom" href="./index.php">Tất cả sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-active-custom" href="#">Hướng dẫn mua hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-active-custom" href="#">Cách Cshọn size</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-active-custom" href="#">Tin tức Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-link-active-custom" href="#">Hệ Thống Shop</a>
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
    </div>
    <div style=" max-width: 1350px; margin-top: 154px;" class="container">
        <div class="row col-12" style="padding-left: 0px;">
            <div class="col-3 justify-content-start" style="padding-left: 0px;">
                <div style="background-color: #333333 !important;" class="list-group list-group list-group-flush">
                    <a style="background-color: #333333 !important; color: orange !important" href="#" class="list-group-item list-group-item-action list-category-item">Danh mục sản phẩm</a>
                    <a href="#" class="list-group-item list-group-item-action name-category-item">Quần Thể Thao</a>
                    <a href="#" class="list-group-item list-group-item-action name-category-item">Áo Thể Thao</a>
                    <a href="#" class="list-group-item list-group-item-action name-category-item">Giày Thể Thao</a>
                    <a href="#" class="list-group-item list-group-item-action name-category-item">Phụ Kiện</a>
                </div>
            </div>
            <div class="col-9 content">
                <div class="row">
                    <img src="../Bootstrap/product img/banner-collection.jpg" alt="">
                </div>
                <div style="color: white;" class="text-all-product">
                    Tất Cả Sản Phẩm
                </div>
                <div class=" category-icon">
                    <i class="fa fa-th-large"></i>
                </div>
                <div style="right: 0; color: white;" class=" float-right justify-content-end">Sắp xếp theo
                    <select style="border-radius: 3px;" name="" id="">
                        <option value="">Mới nhất</option>
                        <option value="">Giá tăng dần</option>
                        <option value="">Giá giảm dần</option>
                        <option value="">Tên: A-Z</option>
                        <option value="">Tên: Z-A</option>
                    </select>
                </div>
                <hr>
                <div class="row list-product">
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <span class="ico-sale">-22%</span>
                            <img class="card-img-top link" src="./product img/nike ball.jpeg" alt="Card image cap">
                            <hr class="gach-ngang">
                            <div style="padding: 0 1px !important;" class="card-body">
                                <a class="card-title product-title" href="./chitiet.php">NIKE FOOTBALL FLIGHT PREMIER
                                    LEAGUE - WHITE/HYPER CRIMSON/BLACK</a>
                                <br>
                                <span class="card-text old-price">4,495,000₫</span>
                                <span class="card-text new-price"> 3,500,000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <span class="ico-sale">-22%</span>
                            <img class="card-img-top link" src="./product img/ADIDAS X SPEEDFLOW.jpg" alt="Card image cap">
                            <hr class="gach-ngang">
                            <div style="padding: 0 1px !important;" class="card-body">
                                <a class="card-title product-title" href="./chitiet.php">ADIDAS X SPEEDFLOW .1 TF
                                    METEORITE - RED/CORE BLACK/SOLAR RED</a>
                                <br>
                                <span class="card-text old-price">3,600,000₫</span>
                                <span class="card-text new-price"> 2,750,000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <span class="ico-sale">-24%</span>
                            <img class="card-img-top link" src="./product img/ADIDAS COPA SENSE .3 FG .jpg" alt="Card image cap">
                            <hr class="gach-ngang">
                            <div style="padding: 0 1px !important;" class="card-body">
                                <a class="card-title product-title" href="./chitiet.php">ADIDAS COPA SENSE .3 FG
                                    METEORITE - RED/FOOTWEAR WHITE/SOLAR RED</a>
                                <br>
                                <span class="card-text old-price">2,695,000₫</span>
                                <span class="card-text new-price"> 1,800,000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <span class="ico-sale">-22%</span>
                            <img class="card-img-top link" src="./product img/NIKE MERCURIAL ZOOM.jpg" alt="Card image cap">
                            <hr class="gach-ngang">
                            <div style="padding: 0 1px !important;" class="card-body">
                                <a class="card-title product-title" href="./chitiet.php">NIKE FOOTBALL FLIGHT PREMIER
                                    LEAGUE - WHITE/HYPER CRIMSON/BLACK</a>
                                <br>
                                <span class="card-text old-price">3,600,000₫</span>
                                <span class="card-text new-price"> 2,750,000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <span class="ico-sale">-1%</span>
                            <img class="card-img-top link" src="./product img/ADIDAS COPA SENSE .3 TF.jpg" alt="Card image cap">
                            <hr class="gach-ngang">
                            <div style="padding: 0 1px !important;" class="card-body">
                                <a class="card-title product-title" href="./chitiet.php">ADIDAS COPA SENSE .3 TF
                                    METEORITE - RED/FOOTWEAR WHITE/SOLAR RED/PRO </a>
                                <br>
                                <span class="card-text old-price">1,900,000₫</span>
                                <span class="card-text new-price"> 1,890,000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <span class="ico-sale">-21%</span>
                            <img class="card-img-top link" src="./product img/nike_tiembi_shoe.jpg" alt="Card image cap">
                            <hr class="gach-ngang">
                            <div style="padding: 0 1px !important;" class="card-body">
                                <a class="card-title product-title" href="./chitiet.php">NIKE TIEMPO REACT LEGEND 9
                                    CLUB TF - WHITE/DARK SMOKE GREY/BLACK/YELLOW</a>
                                <br>
                                <span class="card-text old-price">2,895,000₫</span>
                                <span class="card-text new-price"> 1,940,000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <span class="ico-sale">-1%</span>
                            <img class="card-img-top link" src="./product img/ADIDAS X SPEEDFLOW .png" alt="Card image cap">
                            <hr class="gach-ngang">
                            <div style="padding: 0 1px !important;" class="card-body">
                                <a class="card-title product-title" href="./chitiet.php">ADIDAS X SPEEDFLOW .3 TF
                                    ESCAPELIGHT - CORE BLACK/SONIC INK/SOLAR YELLOW</a>
                                <br>
                                <span class="card-text old-price">1,900,000₫</span>
                                <span class="card-text new-price"> 1,890,000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <span class="ico-sale">-16%</span>
                            <img class="card-img-top link" src="./product img/boc ong dong ADIDAS X LESTO SHIN GUARDS - BLACK.jpg" alt="Card image cap">
                            <hr class="gach-ngang">
                            <div style="padding: 0 1px !important;" class="card-body">
                                <a class="card-title product-title" href="./chitiet.php">BỌC ỐNG ĐỒNG ADIDAS X LESTO
                                    SHIN GUARDS - BLACK</a>
                                <br>
                                <span class="card-text old-price"></span>
                                <span class="card-text new-price"> 320,000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <span class="ico-sale">-29%</span>
                            <img class="card-img-top link" src="./product img/boc ong.jpeg" alt="Card image cap">
                            <hr class="gach-ngang">
                            <div style="padding: 0 1px !important;" class="card-body">
                                <a class="card-title product-title" href="./chitiet.php">BỌC ỐNG ĐỒNG ADIDAS TIRO CLUB
                                    SHIN GUARDS - BLACK/WHITE</a>
                                <br>
                                <span class="card-text old-price">380,000₫</span>
                                <span class="card-text new-price"> 270,000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <span class="ico-sale">-0%</span>
                            <img class="card-img-top link" src="./product img/quanaokamitovang.jpg" alt="Card image cap">
                            <hr class="gach-ngang">
                            <div style="padding: 0 1px !important;" class="card-body">
                                <a class="card-title product-title" href="./chitiet.php">BỘ QUẦN ÁO BÓNG ĐÁ KAMITO
                                    KMSH210250 TRẮNG VÀNG</a>
                                <br>
                                <span class="card-text old-price"></span>
                                <span class="card-text new-price"> 199,000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <span class="ico-sale">-0%</span>
                            <img class="card-img-top link" src="./product img/quanaokamitodo.jpg" alt="Card image cap">
                            <hr class="gach-ngang">
                            <div style="padding: 0 1px !important;" class="card-body">
                                <a class="card-title product-title" href="./chitiet.php">BỘ QUẦN ÁO BÓNG ĐÁ KAMITO
                                    KMSH210510 ĐỎ</a>
                                <br>
                                <span class="card-text old-price"></span>
                                <span class="card-text new-price"> 199,000₫</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <nav style="margin: auto; color: orange !important;" class="col-4" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a style="color: orange !important;" class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a style="color: orange !important;" class="page-link" href="#">1</a></li>
                        <li class="page-item"><a style="color: orange !important;" class="page-link" href="#">2</a></li>
                        <li class="page-item"><a style="color: orange !important;" class="page-link" href="#">3</a></li>
                        <li class="page-item"><a style="color: orange !important;" class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background-color: #333333 !important;" class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Liên hệ với chúng tôi với những mạng xã hội sau:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset"><i class="fab fa-facebook-f"></i> </a>
                <a href="" class="me-4 text-reset"><i class="fab fa-google"></i></a>
                <a href="" class="me-4 text-reset"><i class="fab fa-instagram"></i></a>
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
                        <h6 class="text-uppercase fw-bold mb-4"><i class="fas fa-gem me-3"></i>Nike Shop</h6>
                        <p>Rất hân hạnh được đem đến cho quý khách những sản phẩm tốt nhất với giá thành phải chăng</p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Ngôn ngữ</h6>
                        <p> <a href="#!" class="text-reset">PHP</a></p>
                        <p><a href="#!" class="text-reset">MySQL</a></p>
                        <p> <a href="#!" class="text-reset">JavaScript</a></p>
                        <p><a href="#!" class="text-reset">Laravel</a></p>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
                        <p> <a href="#!" class="text-reset">Pricing</a></p>
                        <p><a href="#!" class="text-reset">Settings</a></p>
                        <p><a href="#!" class="text-reset">Orders</a></p>
                        <p> <a href="#!" class="text-reset">Help</a></p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Liên Hệ</h6>
                        <p><i class="fas fa-home me-3"></i> Việt Trì - Phú Thọ</p>
                        <p><i class="fas fa-envelope me-3"></i> huyngo9981@gmail.com</p>
                        <p><i class="fas fa-envelope me-3"></i> manhhungk18@gmail.com</p>
                        <p><i class="fas fa-phone me-3"></i>0978236082</p>

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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="./script.js"></script>
<script src="./OwlCarousel2-2.3.4/src/js/owl.carousel.js"></script>

</html>