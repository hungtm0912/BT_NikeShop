<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['name']);
unset($_SESSION['role']);
unset($_SESSION['phone']);
unset($_SESSION['email']);
unset($_SESSION['id']);
unset($_SESSION['avatar']);
unset($_SESSION['user_id']);
header('Location: /BT_ShopQuanAo/trangchu.php');