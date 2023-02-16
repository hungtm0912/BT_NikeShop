<?php
require_once "../database/config.php";

if (isset($_POST['signin'])) {
  if (empty(trim($_POST['email'])) || empty(trim($_POST['password']))) {
    $err = "Bạn chưa điền email hoặc mật khẩu";
  } else {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
}
function checkAuth($email, $pass, $mysqli)
{
  if (empty($err)) {
    $sql = "SELECT * FROM users WHERE email = $email ";
    $result = $mysqli->query($sql) or die($mysqli->error);           
    $number_rows = mysqli_num_rows($result);
    if ($number_rows == 1) {
      $each = mysqli_fetch_array($result);
      if (password_verify($pass, $each['password'])) {
        session_start();
        $_SESSION['username'] = $each['username'];
        $_SESSION['role'] = $each['role'];
        $_SESSION['name'] = $each['name'];
        $_SESSION['phone'] = $each['phone'];
        $_SESSION['email'] = $each['email'];
        $_SESSION['user_id'] = $each['user_id'];
        $_SESSION['avatar'] = $each['avatar'];

        header('location: /BT_NikeShop/trangchu.php');
      } else
        header('location: /BT_NikeShop/signin?err_match=Mật khẩu không chính xác!');
    } else {
        header('location: /BT_NikeShop/signin?err_match=Tài khoản hoặc mật khẩu không chính xác!');
    }
  }
}
}




