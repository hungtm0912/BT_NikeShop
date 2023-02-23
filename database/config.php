<?php
define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_NAME', "nike_shop");
define('BT_DIR', "");

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error($mysqli));

if ($mysqli === false) {
  dir("Error: Không Thể Kết Nối");
}