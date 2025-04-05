<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "registeruser";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
  die("Connection field". mysqli_connect_error());
} else {
  echo "";
}