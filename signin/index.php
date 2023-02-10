<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Nike Shop</title>
  <!-- Materialize CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
  <link rel="stylesheet" href="signin.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
  <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<?php
if (isset($_GET['err_match'])) {
  echo '<script type="text/javascript">alert("' . $_GET['err_match'] . '");</script>';
}

if (isset($_GET['err_checkcap'])) {
  echo '<script type="text/javascript">alert("' . $_GET['err_checkcap'] . '");</script>';
}

session_start();
if (isset($_SESSION['username'])) {
  header('location: /BT_NikeShop/trangchu.php');
}
?>
<body class="text-center">
  <main class="form-signin">
    <form method="POST" action="./process_signin.php">
      <img class="mb-4" src="../image/logoshop.png" alt="" width="200" height="160">
      <h1 class="h3 mb-3 fw-normal">Đăng nhập</h1>

      <div class="form-floating">
        <input id="account" type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
        <label for="floatingInput">Tài Khoản</label>
      </div>
      <div class="form-floating">
        <input id="password" type="password" class="form-control" id="floatingPassword" placeholder="Password"
          name="password" required>
        <label for="floatingPassword">Mật Khẩu</label>
      </div>
      <div class="row">
        <div class="g-recaptcha" data-sitekey="6LcA8a0gAAAAAP5YAPhSR9gywJ_Sa38p8e5mP5ut"></div>
      </div>
      <div class="checkbox mb-3">
        <label><input type="checkbox" value="remember-me"> Nhớ mật khẩu</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit" name="signin">Đăng Nhập</button>
    </form>
    <p class="text-center" style="margin-top:8px">Bạn chưa có tài khoản ? <a href="../signup">Đăng ký</a> </p>
    <p class="text-center" style="margin-top:8px"><a href="../forgotpass.php">Quên mật khẩu</a> </p>
    <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
  </main>
  <!-- Materialize JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
