<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Nike Shop</title>
  <link rel="stylesheet" href="./signin.css">
  <link rel="icon" href="./image/logoshop.png" type="image/icon type">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
  <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="icon" href="./image/logoshop.png" type="image/icon type">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<?php
require_once "../database/config.php";
?>
<?php
if (isset($_GET['err_match'])) {
  echo '<script type="text/javascript">alert("' . $_GET['err_match'] . '");</script>';
}

if (isset($_GET['err_checkcap'])) {
  echo '<script type="text/javascript">alert("' . $_GET['err_checkcap'] . '");</script>';
}

session_start();
if (isset($_SESSION['username'])) {
  header("location: ./BT_NikeShop/trangchu.php");
}
?>
<body class="text-center" style="background-color:black;">
  <main class="form-signin">
    <form method="POST" action="./process_signin.php">
      <img class="mb-4" src="../image/logoshop.png" href="../index.php" alt="" width="200" height="160">
      <h1 class="h3 mb-3 fw-normal" style="color:white">Đăng Nhập</h1>
      <div class="form-floating">
        <input id="account" type="email" class="form-control" id="floatingInput" placeholder="Nhập Email" name="email">
        <label for="floatingInput">Tài Khoản</label>
      </div>
      <div class="form-floating">
        <input id="password" type="password" class="form-control" id="floatingPassword" placeholder="Nhập Mật Khẩu" name="password" required>
        <label for="floatingPassword">Mật Khẩu</label>
      </div>
      
      <div class="checkbox mb-3">
        <label><input type="checkbox" value="remember-me"> Nhớ Mật Khẩu</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit" name="signin">Đăng Nhập</button>
 
    <p class="text-center-1" style="margin-top:8px">Bạn chưa có tài khoản ? <a href="../signup">Đăng Ký</a> </p>
    <p class="text-center-1" style="margin-top:8px"><a href="../forgotpass.php">Quên Mật Khẩu</a> </p>
    <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
  </main>
</form>
  <!-- Materialize JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
<style>
  .text-center{
    width: 100%;
    height:auto;
    border-radius: 10px;

  }
  .form-control{
    color:aliceblue;
  }
  .checkbox{
    color:aliceblue;
  }
  .text-center-1{
    color:aliceblue;
  }

 </style>
