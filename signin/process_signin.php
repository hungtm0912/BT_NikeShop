<?php
require_once "../database/config.php";

if (isset($_POST['signin'])) {
  if (empty(trim($_POST['email'])) || empty(trim($_POST['password']))) {
    $err = "Please enter email or password";
  } else {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $secret = "6LcA8a0gAAAAAMCGiFkaOQ70nBtZqsihdMA8jmka";
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
    $data = file_get_contents($url);
    $row = json_decode($data, true);

    if ($row['success'] != "true") {
      header('location: /PhuongNamSport/signin?err_checkcap=Bạn chưa check capcha!');
    } else {
      checkAuth($email, $password, $mysqli);
    }
  }
}

function checkAuth($email, $pass, $mysqli)
{
  if (empty($err)) {
    $sql = "SELECT * FROM users WHERE email = '$email'";
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
        header('location: /PhuongNamSport/trangchu.php');
      } else
        header('location: /PhuongNamSport/signin?err_match=Mật khẩu không chính xác!');
    } else {
      header('location: /PhuongNamSport/signin?err_match=Tài khoản hoặc mật khẩu không chính xác!');
    }
  }
}