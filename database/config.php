<?php

define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_NAME', "adidas_shop");

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error($mysqli));

if ($mysqli === false) {
  dir("Error: Cannot connect");
}