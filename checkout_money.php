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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
  width: 200px;
  height: 50px;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn:hover {
  background-color:#FFFFFF;
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
            <h3>?????a Ch???</h3>
            <label for="fname"><i class="fa fa-user"></i> H??? v?? T??n</label>
            <input type="text" id="fname" name="firstname" placeholder="Nh???p H??? v?? T??n">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Nh???p Email">
            <label for="adr"><i class="fas fa-phone-alt"></i> S??? ??i???n Tho???i</label>
            <input type="text" id="adr" name="address" placeholder="Nh???p S??? ??i???n Tho???i">
            <label for="city"><i class="fa fa-institution"></i> ?????a Ch???</label>
            <input type="text" id="city" name="city" placeholder="Nh???p ?????a Ch???">
            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">M?? B??u Ch??nh</label>
                <input type="text" id="zip" name="zip" placeholder="Nh???p M?? B??u Ch??nh">
              </div>
            </div>
          </div>
          <div class="col-50">
            <h3>Ph????ng Th???c Thanh To??n</h3>
            <label for="fname" class ="hthuc" style="position:relative;top:15px;">H??nh Th???c ???????c Ch???p Nh???n</label>
            <div class="icon-container">
              <i class="fas fa-qrcode"></i>
              <i class="fab fa-cc-visa"></i>
              <i class="fab fa-cc-paypal"></i>
              <i class="fab fa-cc-mastercard"></i>
              <i class="fas fa-credit-card-front"></i>
            </div>
            <label for="cname">T??n Ng??n H??ng</label>
            <input type="text" id="cname" name="cardname" placeholder="Nh???p T??n Ng??n H??ng">
            <label for="ccnum">S??? Th???</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="XXX-XXX-XXX-XXX">
            <label for="expmonth">Th??ng H???t H???n</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="XX-XX-XXXX">
            <div class="row">
              <div class="col-50">
                <label for="expyear">N??m H???t H???n</label>
                <input type="text" id="expyear" name="expyear" placeholder="XXXX">
              </div>
              <div class="col-50">
                <label for="cvv">M?? OTP</label>
                <input type="text" id="cvv" name="cvv" placeholder="Nh???p M?? OTP">
              </div>
            </div>
          </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> ?????a ch??? giao h??ng gi???ng nh?? ?????a ch??? thanh to??n
        </label>
      </form>
        <a href="./index.php"><button class="btn" type="submit">V??? Trang Ch???</button></a> 
        <a href=""><button class="btn" type="submit">Li??n K???t</button></a> 
    </div>
  </div>
</div>
</body>
</html>