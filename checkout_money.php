<?php
require_once "./database/config.php";
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: /". BT_DIR ."BT_NikeShop/signin");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Nike Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="./image/logoshop.png" type="image/icon type">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}
* {
  box-sizing: border-box;
}
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}
.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}
.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}
.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}
.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
label {
  margin-bottom: 10px;
  display: block;
}
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn:hover {
  background-color: #45a049;
}
a {
  color: #2196F3;
}
hr {
  border: 1px solid lightgrey;
}
span.price {
  float: right;
  color: grey;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
        <div class="row">
          <div class="col-50">
            <h3>Địa Chỉ</h3>
            <label for="fname"><i class="fa fa-user"></i> Họ và Tên</label>
            <input type="text" id="fname" name="firstname" placeholder="Nhập Họ và Tên">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Nhập Email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Số Điện Thoại</label>
            <input type="text" id="adr" name="address" placeholder="Nhập Số Điện Thoại">
            <label for="city"><i class="fa fa-institution"></i> Địa Chỉ</label>
            <input type="text" id="city" name="city" placeholder="Nhập Địa Chỉ">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Mã Bưu Chính</label>
                <input type="text" id="zip" name="zip" placeholder="Nhập Mã Bưu Chính">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Phương Thức Thanh Toán</h3>
            <label for="fname">Loại Thẻ Được Chấp Nhận</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:green;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Tên Ngân Hàng</label>
            <input type="text" id="cname" name="cardname" placeholder="Nhập Tên Ngân Hàng">
            <label for="ccnum">Số Thẻ</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Nhập Số Thẻ">
            <label for="expmonth">Tháng Hết Hạn</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Nhập Tháng Hết Hạn">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Năm Hết Han</label>
                <input type="text" id="expyear" name="expyear" placeholder="Nhập Năm Hết Hạn">
              </div>
              <div class="col-50">
                <label for="cvv">Mã Bảo Vệ</label>
                <input type="text" id="cvv" name="cvv" placeholder="Nhập Mã Bảo Vệ">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Địa chỉ giao hàng giống như địa chỉ thanh toán
        </label>
        <input type="submit" value="Thanh Toán" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Giỏ Hàng <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
      <hr>
      <p>Tổng<span class="price" style="color:black"><b> VND</b></span></p>
    </div>
  </div>
</div>
</body>
</html>