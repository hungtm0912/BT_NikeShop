<?php
require_once '../../database/config.php';
session_start();
if (isset($_POST['submit'])) {
  $user_id = $_POST['user_id'];
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $role = $_POST['role'];
  $name = $_POST['name'];
  $avatar = $_FILES['user_avatar']['name'];
  $avatar_tmp = $_FILES['user_avatar']['tmp_name'];
  $path = '../upload/user/';

  $sql_check = "SELECT count(*) FROM users where email='$email' and user_id <> '$user_id'";
  $result = $mysqli->query($sql_check);
  $number_rows = mysqli_fetch_array($result)['count(*)'];

  if ($number_rows == 1) {
    header("location: ./update_user.php?id=$user_id&err_exist=Tài khoản đã tồn tại rùi");
    exit;
  }

  $sql = "UPDATE users
          SET username='$fullname',
          email='$email',
          phone='$phone',
          role='$role',
          name='$name'
          avatar='$avatar'
          WHERE user_id='$user_id'";

  $mysqli->query($sql);
  move_uploaded_file($avatar_tmp, $path . $avatar);

  $_SESSION['email'] = $email;
  header('location: ../userlist.php?success=true');
}

if (isset($_GET['id_delete']) || isset($_GET['id_userd'])) {
  $user_id = $_GET['id_delete'] ? $_GET['id_delete'] : $_GET['id_userd'];
  $sql = "DELETE FROM users WHERE user_id='$user_id'";
  $mysqli->query($sql);

  unset($_SESSION['username']);
  unset($_SESSION['name']);
  unset($_SESSION['role']);
  unset($_SESSION['phone']);
  unset($_SESSION['email']);
  unset($_SESSION['id']);
  unset($_SESSION['user_id']);
  unset($_SESSION['avatar']);
  if (isset($_GET['id_userd'])) {
    header('location: /PhuongNamSport/trangchu.php?success_del=true');
  } else {
    header('location: ../userlist.php?success_del=true');
  }
}