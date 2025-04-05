<?php

require_once('db.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeatpass = $_POST['repeatpass'];


if ($password != $repeatpass) {
  echo "Пароли не совпадают";
} else {
  $sql = "INSERT INTO `users` (username, email, pass) VALUES ('$username', '$email', '$password')";
  if ($conn -> query($sql)) {
    echo "Успешная регистрация";
  } else {
    echo "Ошибка: " . $conn->error;
  }
}

