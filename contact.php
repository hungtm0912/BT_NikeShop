<?php
  require_once "./database/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nike Shop</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="./image/logoshop.png" type="image/icon type">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
   integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
  <?php
    session_start();
  ?>
  
<body>
  <!--Start of Tawk.to Script-->
  <div class="container-fluid">
  <?php
    session_start();
    include './includes/navbar.php';
    ?>
    </div>
  <!--End of Tawk.to Script-->
 
<div class="container" style="margin-top: 130px">
	
  <form action="">
	<div class="row input-container" >
    <div class="col-sm-12">
			<h2 style="font-size: 50px;text-align:center">Liên Hệ Với Chúng Tôi</h2>
	  </div>
	  <div  class="col-sm-12">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	  </div>
			<div class="col-sm-12">
      <div class="form-group">
        <input type="tel" class="form-control" id="customerFullName" name="name_receiver"
        placeholder="Nhập Họ và Tên" style="padding: 20px;">
      </div>
			</div>
			<div class="col-md-6 col-sm-12">
      <div class="form-group">
        <input type="tel" class="form-control" id="customerFullName" name="name_receiver"
        placeholder="Nhập Email" style="padding: 20px;">
      </div>
			</div>
			<div class="col-md-6 col-sm-12">
      <div class="form-group">
        <input type="tel" class="form-control" id="customerFullName" name="name_receiver"
        placeholder="Nhập Điện thoại" style="padding: 20px;">
      </div>
			</div>
			<div class="col-sm-12">
        <div class="form-group">
        <textarea required placeholder="Nhập Điện thoại"></textarea>
      </div>
			</div>
      <div class="col-sm-12" style="text-align: center;">
      <a href="index.php"><div class="btn-lrg submit-btn" onclick="alert('Gửi Thành Công');">Gửi tin nhắn</div></a>
				</div>
			</div>
      </form>
	</div>
</div>
</body>
<style>
body {
  background-color: #444442;
  position:relative;
  top:20px;
}
h2 {
  font-family: 'Poppins', sans-serif, 'arial';
  font-weight: 600;
  font-size: 72px;
  color: white;
}
h4 {
  font-family: 'Roboto', sans-serif, 'arial';
  font-weight: 400;
  font-size: 20px;
  color: #9b9b9b;
  line-height: 1.5;
}
/* ///// inputs /////*/
input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
  font-size: 0.75em;
  color: #999;
  top: -5px;
  -webkit-transition: all 0.225s ease;
  transition: all 0.225s ease;
}
.styled-input {
  float: left;
  width: 293px;
  margin: 1rem 0;
  position: relative;
  border-radius: 4px;
}
@media only screen and (max-width: 768px){
  .styled-input {
      width:100%;
  }
}
.styled-input label {
  color: #999;
  padding: 1.3rem 30px 1rem 30px;
  position: absolute;
  top: 10px;
  left: 0;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  pointer-events: none;
}
.styled-input.wide { 
  width: 650px;
  max-width: 100%;
}
input,
textarea {
  padding: 30px;
  border: 1px solid #ced4da;
  width: 100%;
  font-size: 1rem;
  background-color: #fff;
  color: white;
  border-radius: 4px;
}
input:focus,
textarea:focus { outline: 0; }

input:focus ~ span,
textarea:focus ~ span {
  width: 100%;
  -webkit-transition: all 0.075s ease;
  transition: all 0.075s ease;
}
textarea {
  width: 100%;
  min-height: 15em;
}
.input-container {
  width: 650px;
  max-width: 100%;
  margin: 20px auto 25px auto;
}
.submit-btn {
  padding: 7px 35px;
  border-radius: 60px;
  display: inline-block;
  background-color: #4b8cfb;
  color: white;
  font-size: 18px;
  cursor: pointer;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.06),
              0 2px 10px 0 rgba(0,0,0,0.07);
  -webkit-transition: all 300ms ease;
  transition: all 300ms ease;
}
.submit-btn:hover {
  transform: translateY(1px);
  box-shadow: 0 1px 1px 0 rgba(0,0,0,0.10),
              0 1px 1px 0 rgba(0,0,0,0.09);
}
@media (max-width: 768px) {
  .submit-btn {
      width:100%;
      float: none;
      text-align:center;
  }
}
input[type=checkbox] + label {
  color: #ccc;
  font-style: italic;
} 
input[type=checkbox]:checked + label {
  color: #f00;
  font-style: normal;
}
</style>

